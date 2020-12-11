
<?php

class EmployeesModel extends Model{

    private $attendanceTable;
    private $logTable;
    private $dutyTable;
    private $employeeUserTable;
    private $mainUserTable;
    private $minorStaffTable;
    private $salaryTable;

    public function __construct($database){
        parent::__construct($database);
        $this->attendanceTable = TB_attendance;
        $this->logTable = TB_SYSTEM_LOG;
        $this->dutyTable = TB_duty;
        $this->employeeUserTable = TB_empUser;
        $this->mainUserTable = TB_mainUser;
        $this->minorStaffTable = TB_minor;
        $this->salaryTable = TB_salary;
    }

    public function getMinorStaffDetails(){
        return $this->databaseMapper->get($this->minorStaffTable, []);
    }

    private function getMaxId(){
        $idArray = $this->databaseMapper->get($this->logTable, ['MAX(id)']);
        return array_shift($idArray)->{'MAX(id)'};
    }

    private function getLoggedDay($dayId){
        $dateArray =  $this->databaseMapper->find($this->logTable, ['date'], 'id', $dayId);
        $date = array_shift($dateArray)->date;
        $loggedDay = null;
        if(isset($date)){
            $loggedDay = $date;
        }
        return $loggedDay;
    }


    public function getAttendance(){

        $lastLoggedDayId = $this->getMaxId();
        $lastLoggedDay = $this->getLoggedDay($lastLoggedDayId);
        $previousLoggedDay = $this->getLoggedDay($lastLoggedDayId - 1);
        $finalDayAttendance = $this->getAttendanceDay($lastLoggedDay);
        $previousDayAttendance = $this->getAttendanceDay($previousLoggedDay);
        $lastWeekAttendance = $this->getAttendanceLastWeek($lastLoggedDayId);

        return array($finalDayAttendance, $previousDayAttendance,$lastWeekAttendance );
    }

    public function deleteEmployee($id){
        return $this->databaseMapper->delete($this->minorStaffTable, 'id', $id);
    }

    
    public function getNameId(){
        return $this->databaseMapper->get($this->minorStaffTable, []);
    }

    public function addEmployee($data){
        return $this->databaseMapper->insert($this->minorStaffTable, $data);
    }

    public function findEmployeeById($id){
        return $this->databaseMapper->find($this->minorStaffTable, [], 'id', $id);
    }

    public function findUserByNIC($NIC){
        return $this->databaseMapper->find($this->minorStaffTable, [], 'nic', $NIC);
    }

    public function editEmployee($data, $id){
        return $this->databaseMapper->update($this->minorStaffTable, $data, 'id', $id);
    }
    
    public function searchDate($date){
        return $this->databaseMapper->find($this->attendanceTable, [], 'date', $date);
    }
    
    public function getSalary($month){                                                         ////////////////////////////////////////////////////////////////////////////////////////
        return $this->databaseMapper->find($this->salaryTable, [], 'month', $month);
    }
    
    public function isMarked($date){
        $attendance = $this->searchDate($date);
        return $attendance;
    }

    public function markAttendance($list){
        for ($i=0; $i<sizeof($list); $i++){
            $this->databaseMapper->insert($this->attendanceTable,$list[$i]);
        }

    }

    private function getAttendanceLastWeek($dayId){
        $present = 0;
        $absent = 0;
        for ($i = ($dayId - 7); $i <= $dayId; $i++) {
            $day =$this->getLoggedDay($i);
            $array = $this->getAttendanceDay($day);
            if(isset($array[$day]['present'])){
                $present = $present + $array[$day]['present'];
            }
            if(isset($array[$day]['absent'])){
                $absent = $absent + $array[$day]['absent'];
            }   
        }

        return array("last-week" => array("present" => $present, "absent" => $absent));
    }

    public function getAttendanceDay($day){
        $countArray = "Not-Marked";
        if(isset($day)){
            $data = $this->databaseMapper->find($this->attendanceTable, ['presence', 'date'], 'date', $day);
            $countArray = $this->getAttendanceCount($data);
        }
        return array($day => $countArray);

    }


    private function getAttendanceCount($data){
        $present = 0;
        $absent = 0;
        foreach($data as $row){
            $status = $row->presence;
            if($status == "Present"){
                $present = $present + 1;
            }elseif ($status == "Absent") {
                $absent = $absent + 1;
            }
        }

        $array = array("present" => $present, "absent" => $absent);
        return $array;
    }

    public function instantSearch($search){
        return $this->databaseMapper->findLike($this->minorStaffTable, [], 'full_name',$search);
    }

    public function getEmployeeNames(){
        return $this->databaseMapper->get($this->minorStaffTable, ['full_name']);
    }

    public function getIds($day){
        $data = $this->databaseMapper->find($this->attendanceTable, ['presence', 'date'], 'date', $day);
    }

}