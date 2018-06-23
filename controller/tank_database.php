<?php
class Tank_database {
    private $db_connect;
    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'datasoft_water_tank';
        
        $this->db_connect=  mysqli_connect($host_name, $user_name, $password, $db_name);
        if(!$this->db_connect){
            die('Connection Failed'.mysqli_error($this->db_connect));
        }
    }


    public function select_all_tank_info(){
        $sql="SELECT * From tank_status";
          if (mysqli_query($this->db_connect, $sql)){
          $query_result = mysqli_query($this->db_connect, $sql);
              return $query_result;
          } else {
              die('Query problem' . mysqli_error($this->db_connect));
          }  
      }


      public function select_all_user_info(){
        $sql="SELECT * From user";
          if (mysqli_query($this->db_connect, $sql)){
          $query_result = mysqli_query($this->db_connect, $sql);
              return $query_result;
          } else {
              die('Query problem' . mysqli_error($this->db_connect));
          }  
      }


      public function select_all_notifications(){
        $sql="SELECT * From tank_notification ORDER BY notification_id DESC";
          if (mysqli_query($this->db_connect, $sql)){
          $query_result = mysqli_query($this->db_connect, $sql);
              return $query_result;
          } else {
              die('Query problem' . mysqli_error($this->db_connect));
          }  
      }


      public function notification_details_by_id($notification_id){
        $sql="SELECT * FROM  tank_notification WHERE notification_id = '$notification_id'";
          if (mysqli_query($this->db_connect, $sql)){
          $query_result = mysqli_query($this->db_connect, $sql);
              return $query_result;
          } else {
              die('Query problem' . mysqli_error($this->db_connect));
          }

        }

      public function update_notification_seen($notification_id){
          $sql = "UPDATE tank_notification SET seen=1 where notification_id = '$notification_id'"; 
          if(mysqli_query($this->db_connect, $sql)){
            return 0;
          }  else {
              die('Query problem' . mysqli_error($this->db_connect));
          }
        }

      public function select_dropdown_notifications(){
        $sql="SELECT * From tank_notification where seen = 0 OR danger = 1";
          if (mysqli_query($this->db_connect, $sql)){
          $query_result = mysqli_query($this->db_connect, $sql);
              return $query_result;
          } else {
              die('Query problem' . mysqli_error($this->db_connect));
          }  
      }    

      

      public function select_all_tank_info_by_id($device_id){
        $sql="SELECT * From tank_status WHERE device_id = '$device_id'";
          if (mysqli_query($this->db_connect, $sql)){
          $query_result = mysqli_query($this->db_connect, $sql);
              return $query_result;
          } else {
              die('Query problem' . mysqli_error($this->db_connect));
          }  
      }
      
      
      public function insert_user_details($data) {
        $sql = "INSERT INTO user (`username`,`email`, `firstname`, `lastname`, `address`, `city`, `country`, `postal`,`deviceId`,`phoneNumber`,`password`) VALUES ('$data[username]','$data[email]','$data[firstname]','$data[lastname]','$data[address]','$data[city]','$data[country]','$data[postal]','$data[deviceId]','$data[phoneNumber]','$data[password]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Successfully Added an User";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

}