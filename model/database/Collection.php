<?php

namespace Nathel;

class Collection extends Dbh
{

    public $id;
    public $name;
    public $thumbnail;
    public $description;
    public $created_at;
    public $updated_at;


    public function __construct($collection_id)
    {
        $this->id = $collection_id;
        $collection = $this->getCollection();
        $this->name = $collection['name'];
        $this->thumbnail = $collection['thumbnail'];
        $this->description = $collection['description'];
        $this->created_at = $collection['created_at'];
        $this->updated_at = $collection['updated_at'];
    }



    public function getCollection(): array
    {
        $stmt = self::connectToDb()->prepare('SELECT * FROM collections WHERE id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getCollectionMappools(): array
    {
        $stmt = self::connectToDb()->prepare('SELECT id FROM mappools WHERE collection_id = :collection_id');
        $stmt->bindParam(':collection_id', $this->id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getCollectionContributors(): array
    {
        $stmt = self::connectToDb()->prepare('SELECT * FROM contributors WHERE collection_id = :collection_id');
        $stmt->bindParam(':collection_id', $this->id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getLastContributor(): array
    {
        $stmt = self::connectToDb()->prepare('SELECT * FROM contributors WHERE collection_id = :collection_id LIMIT 1');
        $stmt->bindParam(':collection_id', $this->id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getCollectionCreator(): array
    {
        $stmt = self::connectToDb()->prepare('SELECT * FROM contributors WHERE collection_id = :collection_id AND creator = 1');
        $stmt->bindParam(':collection_id', $this->id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getCollectionTags(): array
    {
        $stmt = self::connectToDb()->prepare('SELECT * FROM collection_tags INNER JOIN tags on collection_tags.tag_id = tags.id WHERE collection_id = :collection_id ORDER BY type');
        $stmt->bindParam(':collection_id', $this->id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getCollectionTag(): array
    {
        $stmt = self::connectToDb()->prepare('SELECT * FROM collection_tags WHERE collection_id = :collection_id AND tag_id = :tag_id');
        $stmt->bindParam(':collection_id', $this->id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getTotalFollow(): int
    {
        $stmt = self::connectToDb()->prepare('SELECT COUNT(*) FROM collections INNER JOIN mappools ON collections.id = mappools.collection_id INNER JOIN mappool_followed mf on mappools.id = mf.mappool_id WHERE collections.id = :id GROUP BY mf.user_id');
        $stmt->bindParam(':user_id', $this->id);
        $stmt->execute();
        return $stmt->fetch();
    }



    public static function storeCollection(User $user, $data)
    {
        $dbh = self::connectToDb();
        $stmt = $dbh->prepare('INSERT INTO collections (name, thumbnail, description) VALUES (:name, :thumbnail, :description)');
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':thumbnail', $data['thumbnail']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->execute();
        $id = $dbh->lastInsertId();

        $user->storeCreator($id);
    }

    public static function storeNewTag($data): string
    {
        $dbh = self::connectToDb();
        $stmt = $dbh->prepare('INSERT INTO tags (name, type) VALUES (:name, :type)');
        $stmt->bindParam(':collection_id', $data['name']);
        $stmt->bindParam(':tag_id', $data['type']);
        $stmt->execute();
        return $dbh->lastInsertId();
    }

    public function storeCollectionTag($tag_id)
    {
        $stmt = self::connectToDb()->prepare('INSERT INTO collection_tags (collection_id, tag_id) VALUES (:collection_id, :tag_id)');
        $stmt->bindParam(':collection_id', $this->id);
        $stmt->bindParam(':tag_id', $tag_id);
        $stmt->execute();
    }



    public function updateName($name): bool
    {
        $stmt = self::connectToDb()->prepare('UPDATE collections SET name = :name, updated_at = NOW() WHERE id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $name);
        return $stmt->execute();
    }

    private function updateDescription(): bool
    {
        $stmt = self::connectToDb()->prepare('UPDATE collections SET description = :description, updated_at = NOW() WHERE id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }



    public function deleteCollection()
    {
        $stmt = self::connectToDb()->prepare('DELETE FROM collections WHERE id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();

        $this->deleteCollectionMappools();
        $this->deleteCollectionTags();
        $this->deleteCollectionContributors();
        $this->deleteCollectionInvitation();
    }

    private function deleteCollectionMappools()
    {
        $stmt = self::connectToDb()->prepare('DELETE FROM mappools WHERE collection_id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    private function deleteCollectionTags()
    {
        $stmt = self::connectToDb()->prepare('DELETE FROM collection_tags WHERE collection_id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    private function deleteCollectionContributors()
    {
        $stmt = self::connectToDb()->prepare('DELETE FROM contributors WHERE collection_id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    private function deleteCollectionInvitation()
    {
        $stmt = self::connectToDb()->prepare('DELETE FROM invitations WHERE collection_id = :id');
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    //Search bar query :


    public static function getMostPopular()
    {
        $stmt = self::connectToDb()->prepare('SELECT * FROM mappools mp INNER JOIN collections cl ON mp.collection_id = cl.id ORDER BY mp.follow');
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public static function P($E)
    {
        $P = array();
        $i = 0;
        $max_i = 2**(count($E))-1;

        while ($i <= $max_i){
            $s = array();
            $j = 0;
            $max_j = count($E)-1;
            while ($j <= $max_j){
                if (($i>>$j)&1 == 1){
                    array_push($s, $E[$j]);
                }
                $j+=1;
            }

            array_push($P, $s);
            $i+=1;
        }

        return $P;
    }

    public static function searchCollectionsWithName($mots)
    {
        $queries = self::P($mots);
        $collections = array();
        foreach ($queries as $query){
            $s = "";
            if (count($query)>1){
                for($i = 1; $i<count($query);$i++){
                    $s.= ' AND "%'.$query[$i].'%"';
                }
            }
            $q = "%".$query[0]."%";
            $stmt = self::connectToDb()->prepare('SELECT * FROM collections WHERE name LIKE :mot1 :suite');
            $stmt->bindParam(':mot1', $q);
            $stmt->bindParam(':suite', $s);
            $stmt->execute();
            $tmp = $stmt->fetchAll();
            if (count($query) == 1){ $tmp['Valeur'] = 1;}
            if (count($query) == 2){ $tmp['Valeur'] = 2;}
            if (count($query) == 3){ $tmp['Valeur'] = 3;}
            if (count($query) == 4){ $tmp['Valeur'] = 4;}
            if (count($query) >= 5){ $tmp['Valeur'] = 5;}
            $collections = array_merge($collections, $tmp);
        }
        return $collections;
    }
    // fonctions pour contributeur ; requete : SELECT * FROM contributors cb INNER JOIN collections cl ON cb.collection_id = cl.id WHERE cb.user_id = X

    public static function searchCollectionWithContributors($mots)
    {
        foreach ($mots as $mot){
            $stmt = self::connectToDb()->prepare('SELECT * FROM contributors cb INNER JOIN collections cl ON cb.collection_id = cl.id WHERE cb.user_id = :id');
            $stmt->bindParam(':mot1', $mot);
            $stmt->execute();
            $tmp = $stmt->fetchAll();
        }
    }

}

