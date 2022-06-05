<?php 
	class Record{
		private $id;
		private $driverCode;
		private $timeIn;
		private $timeOut;
		private $timeOther;
		private $location;
		public $db;
		
		public function __construct($db){
            $this->db = $db;
        }

        // Insert data into database
        public function createRecord($driverCode, $time, $location){
                if ($time == 'in') {
                    $this->driverCode = $this->db->con->real_escape_string($driverCode);
                    $this->timeOut = 'none';
                    $this->timeOther = 'none';
                    $this->location = $this->db->con->real_escape_string($location);
                    $query="INSERT INTO records(driver_code,time_in,time_out,time_other,location) VALUES('$this->driverCode',NOW(),'$this->timeOut','$this->timeOther','$this->location')";
                }
                if ($time == 'out') {
                    $this->driverCode = $this->db->con->real_escape_string($driverCode);
                    $this->timeIn = 'none';
                    $this->timeOther = 'none';
                    $this->location = $this->db->con->real_escape_string($location);
                    $query="INSERT INTO records(driver_code,time_in,time_out,time_other,location) VALUES('$this->driverCode','$this->timeIn',NOW(),'$this->timeOther','$this->location')";
                }
                if ($time == 'other') {
                    $this->driverCode = $this->db->con->real_escape_string($driverCode);
                    $this->timeIn = 'none';
                    $this->timeOut = 'none';
                    $this->location = $this->db->con->real_escape_string($location);
                    
                    $query="INSERT INTO records(driver_code,time_in,time_out,time_other,location) VALUES('$this->driverCode','$this->timeIn','$this->timeOut',NOW(),'$this->location')";
                }

                $sql = $this->db->con->query($query);
                if ($sql==true) {
                    header("Location:index.php?msg=success");
                }
                else{
                    //header("Location:index.php?msg=error");
                    echo '<p class="text-danger">Something went wring, couldnt post to database</p>';
                }                 
            

            $this->db->con->close();
        }

        // Retrieve all the records from database
        public function showAllRecords(){
            $query = "SELECT * FROM records";
            $result = $this->db->con->query($query);       
            if ($result->num_rows > 0) {
                $data = array();
                while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
                return $data;
            }else{
             exit("No record found!");
            }
            $this->db->con->close();
        }
	}
?>