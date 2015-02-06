<?php

class BigDB {
    private $httpChannel;

    function __construct(HttpChannel $httpChannel) {
        $this->httpChannel = $httpChannel;
    }

    private function _createObjects(array $objects, $loadExisting) {
        $args = new CreateObjectsArgs();
        $output = new CreateObjectsOutput();
        $error = new CreateObjectsError();

        foreach ($objects as $key => $val) {
            $args->set_objects($key, $val);
        }
        $args->set_loadExisting($loadExisting);

        if ($this->httpChannel->request(82, $args, $output, $error)) {
            return $output->objects_array();
        } else {
            throw new PlayerIOError($error->message(), $error->errorCode());
        }
    }

    /**
     * @param array $objectIds
     * @throws PlayerIOError
     * @returns array
     */
    private function _loadObjects(array $objectIds) {
        $args = new LoadObjectsArgs();
        $output = new LoadObjectsOutput();
        $error = new LoadObjectsError();

        foreach ($objectIds as $key => $val) {
            $args->set_objectIds($key, $val);
        }

        if ($this->httpChannel->request(85, $args, $output, $error)) {
            return $output->objects_array();
        } else {
            throw new PlayerIOError($error->message(), $error->errorCode());
        }
    }

    private function _saveObjectChanges($lockType, array $changesets, $createIfMissing) {
        $args = new SaveObjectChangesArgs();
        $output = new SaveObjectChangesOutput();
        $error = new SaveObjectChangesError();

        $args->set_lockType($lockType);
        foreach ($changesets as $key => $val) {
            $args->set_changesets($key, $val);
        }
        $args->set_createIfMissing($createIfMissing);

        if ($this->httpChannel->request(88, $args, $output, $error)) {
            return $output->versions_array();
        } else {
            throw new PlayerIOError($error->message(), $error->errorCode());
        }
    }

    private function _deleteObjects(array $objectIds) {
        $args = new DeleteObjectsArgs();
        $output = new DeleteObjectsOutput();
        $error = new DeleteObjectsError();

        foreach ($objectIds as $key => $val) {
            $args->set_objectIds($key, $val);
        }

        if ($this->httpChannel->request(91, $args, $output, $error)) {
            return true;
        } else {
            throw new PlayerIOError($error->message(), $error->errorCode());
        }
    }

    private function _loadMatchingObjects($table, $index, array $indexValue, $limit) {
        $args = new LoadMatchingObjectsArgs();
        $output = new LoadMatchingObjectsOutput();
        $error = new LoadMatchingObjectsError();

        $args->set_table($table);
        $args->set_index($index);
        foreach ($indexValue as $key => $val) {
            $args->set_indexValue($key, $val);
        }
        $args->set_limit($limit);

        if ($this->httpChannel->request(94, $args, $output, $error)) {
            return $output->objects_array();
        } else {
            throw new PlayerIOError($error->message(), $error->errorCode());
        }
    }

    private function _loadIndexRange($table, $index, array $startIndexValue, array $stopIndexValue, $limit) {
        $args = new LoadIndexRangeArgs();
        $output = new LoadIndexRangeOutput();
        $error = new LoadIndexRangeError();

        $args->set_table($table);
        $args->set_index($index);
        foreach ($startIndexValue as $key => $val) {
            $args->set_startIndexValue($key, $val);
        }
        foreach ($stopIndexValue as $key => $val) {
            $args->set_stopIndexValue($key, $val);
        }
        $args->set_limit($limit);

        if ($this->httpChannel->request(97, $args, $output, $error)) {
            return $output->objects_array();
        } else {
            throw new PlayerIOError($error->message(), $error->errorCode());
        }
    }


    private function _deleteIndexRange($table, $index, array $startIndexValue, array $stopIndexValue) {
        $args = new DeleteIndexRangeArgs();
        $output = new DeleteIndexRangeOutput();
        $error = new DeleteIndexRangeError();

        $args->set_table($table);
        $args->set_index($index);
        foreach ($startIndexValue as $key => $val) {
            $args->set_startIndexValue($key, $val);
        }
        foreach ($stopIndexValue as $key => $val) {
            $args->set_stopIndexValue($key, $val);
        }

        if ($this->httpChannel->request(100, $args, $output, $error)) {
            return true;
        } else {
            throw new PlayerIOError($error->message(), $error->errorCode());
        }
    }

    function loadMyPlayerObject() {
        $args = new LoadMyPlayerObjectArgs();
        $output = new LoadMyPlayerObjectOutput();
        $error = new LoadMyPlayerObjectError();

        if ($this->httpChannel->request(103, $args, $output, $error)) {
            return $output->playerObject();
        } else {
            throw new PlayerIOError($error->message(), $error->errorCode());
        }
    }

    /**
     * @param $table
     * @param $key
     * @throws PlayerIOError
     * @returns BigDBObject
     */
    function load($table, $key) {
        $objId = new BigDBObjectId();
        $objId->set_table($table);
        $objId->set_keys(0, $key);

        return $this->_loadObjects(array($objId))[0];
    }

    function loadOrCreate($table, $key) {
        $newObj = new NewBigDBObject();
        $newObj->set_table($table);
        $newObj->set_key($key);

        return $this->_createObjects(array($newObj), true);
    }

    function loadKeys($table, array $keys) {
        $objId = new BigDBObjectId();
        $objId->set_table($table);
        foreach ($keys as $key => $val) {
            $objId->set_keys($key, $val);
        }

        return $this->_loadObjects(array($objId));
    }

    function loadKeysOrCreate($table, array $keys) {
        $objs = array();
        foreach ($keys as $key){
            $newObj = new NewBigDBObject();
            $newObj->set_table($table);
            $newObj->set_key($key);
            array_push($objs, $newObj);
        }

        return $this->_loadObjects($objs, true);
    }

    function deleteKeys($table, array $keys) {
        $objId = new BigDBObjectId();
        $objId->set_table($table);
        foreach ($keys as $key => $val) {
            $objId->set_keys($key, $val);
        }

        return $this->_deleteObjects($table, array($objId));
    }

    function createObject($table, $key, array $data) {
        $newObj = new NewBigDBObject();
        $newObj->set_table($table);
        $newObj->set_key($key);

        foreach ($data as $key => $value) {
            $param = new ObjectProperty();
            $param->set_name($key);
            $param->set_value($value);

            $newObj->set_properties($newObj->properties_size(), $param);
        }

        return $this->_createObjects(array($newObj), true);
    }

    function loadSingle($table, $index, $indexValue) {
        return $this->_loadMatchingObjects($table, $index, $indexValue, 1)[0];
    }

    function loadRange($table, $index, array $path, $start, $stop, $limit) {
        $startPath = array_merge($path, array($start));
        $stopPath = array_merge($path, array($stop));

        return $this->_loadIndexRange($table, $index, $startPath, $stopPath, $limit);
    }

    function deleteRange($table, $index, $path, $start, $stop) {
        $startPath = array_merge($path, array($start));
        $stopPath = array_merge($path, array($stop));

        return $this->_deleteIndexRange($table, $index, $startPath, $stopPath);
    }

    function save($table, $key, $version, $changeset, $useOptimisticLocks, $createIfMissing) {
        $changesObj = new BigDBChangeset();
        $changesObj->set_table($table);
        $changesObj->set_key($key);
        if ($useOptimisticLocks)
            $changesObj->set_onlyIfVersion($version);

        foreach ($changeset as $key => $value) {
            $param = new ObjectProperty();
            $param->set_name($key);
            $param->set_value($value);

            $changesObj->set_changes($changesObj->properties_size(), $param);
        }

        return $this->_saveObjectChanges(2, array($changesObj), $createIfMissing); // 2 == LOCKTYPE.LOCKALL
    }

    function parseObject(BigDBObject $object) {
        $dbObj = new DatabaseObject($object->key(), $object->creator(), $object->version);
        for ($x = 0; $x <= $object->properties_size(); $x++) {
            //$obj =  $object-
        }
    }
} 