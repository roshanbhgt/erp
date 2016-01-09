<?php
class Database {
    
    private $link;
    private $error;
    private $errno;
    private $query;
 
    function __construct() {
		$conn = 1;
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->name = 'billing';
        if ($conn == 1) $this -> connect();
    }
 
    function __destruct() {
        mysqli_close($this->link);
    }
 
    public function connect() {
    	$this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->name) or die(mysqli_connect_error());
    }
 
    public function close() {
        mysqli_close($this->link);
    }
 
    public function query($sql) {
        if ($this->query = mysqli_query($this->link, $sql)) {
            return $this->query;
        } else {
            $this->exception("Could not query database!");
            return false;
        }
    }
 
    public function num_rows($qid) {
        if (empty($qid)) {         
            $this->exception("Could not get number of rows because no query id was supplied!");
            return false;
        } else {
            return mysqli_num_rows($qid);
        }
    }
 
    public function fetch_array($qid) {
        if (empty($qid)) {
            $this->exception("Could not fetch array because no query id was supplied!");
            return false;
        } else {
            $data = $qid->fetch_array(MYSQLI_BOTH);
        }
        return $data;
    }
 
    public function fetch_array_assoc($qid) {
        if (empty($qid)) {
            $this->exception("Could not fetch array assoc because no query id was supplied!");
            return false;
        } else {
            $data = $qid->fetch_array(MYSQLI_ASSOC);
        }
        return $data;
    }
 
    public function fetch_all_array($sql, $assoc = true) {
        $data = array();
        if ($qid = $this->query($sql)) {
            if ($assoc) {
                while ($row = $qid->fetch_array(MYSQLI_ASSOC)) {
                    $data[] = $row;
                }
            } else {
                while ($row = $qid->fetch_array(MYSQLI_ASSOC)) {
                    $data[] = $row;
                }
            }
        } else {
            return false;
        }
        return $data;
    }
 
    public function last_id() {
        return mysqli_insert_id($this->link);
    }
    
    public function num_fields($qid) {
    	if ($num = mysqli_num_fields($qid)) {
    		return $num;
    	} else {
    		return false;
    	}
    }
 
    private function exception($message) {
        if ($this->link) {
            $this->error = mysqli_connect_error($this->link);
            $this->errno = mysqli_connect_errno($this->link);
        } else {
            $this->error = mysqli_connect_error();
            $this->errno = mysqli_connect_errno();
        }
        if (PHP_SAPI !== 'cli') {
        ?>
 
            <div class="alert-bad">
                <div>
                    Database Error
                </div>
                <div>
                    Message: <?php echo $message; ?>
                </div>
                <?php if (strlen($this->error) > 0): ?>
                    <div>
                        <?php echo $this->error; ?>
                    </div>
                <?php endif; ?>
                <div>
                    Script: <?php echo @$_SERVER['REQUEST_URI']; ?>
                </div>
                <?php if (strlen(@$_SERVER['HTTP_REFERER']) > 0): ?>
                    <div>
                        <?php echo @$_SERVER['HTTP_REFERER']; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php
        } else {
                    echo "MYSQL ERROR: " . ((isset($this->error) && !empty($this->error)) ? $this->error:'') . "\n";
        };
    }
}
?>