<?php

    # No matter how many keys...
    if (isset($id) && !is_array($id)) $id = array($id); //old-fashioned way readRecord(int);
    if (!isset($id)) foreach($this->keys as $key=>$val) $id[] = null;
    foreach($id as $key=>$val) {
      if(empty($val))
        $val = (isset($this->request['alm_old_' . $this->keys[$key]])) ? $this->request['alm_old_' . $this->keys[$key]] : $this->request[$this->keys[$key]];
      $keyfilter[] = $this->keys[$key] . " = '$val'";
    }
    $filter = join(' AND ', $keyfilter);

    $values = $this->preUpdateRecord($maxcols, $nofiles);
    $sqlcmd = "UPDATE $this->name SET $values WHERE $filter";
    $result = $this->query($sqlcmd);
