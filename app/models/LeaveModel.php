<?php

class LeaveModel extends Model{
    private $leaveDetailsTable;
    private $leaveTypeTable;

    public function __construct($database){
        parent::__construct($database);
        $this->leaveDetailsTable = TB_LEAVE_DETAILS;
        $this->leaveTypeTable = TB_LEAVE_TYPE;
    }

    public function getLeaveDetails(){
        return $this->databaseMapper->get($this->leaveDetailsTable, []);
    }

    public function getLeaveTypes(){
        return $this->databaseMapper->get($this->leaveTypeTable, []);
    }

    public function addLeave($data){
        return $this->databaseMapper->insert($this->leaveDetailsTable,$data);
    }

    public function addLeaveType($data){
        return $this->databaseMapper->insert($this->leaveTypeTable,$data);
    }

    public function deleteLeave($id){
        return $this->databaseMapper->delete($this->leaveDetailsTable, 'id', $id);
    }

    public function deleteLeaveType($id){
        return $this->databaseMapper->delete($this->leaveTypeTable,'id',$id); 
    }

    public function updateLeaveStatus($id,$value){
        return $this->databaseMapper->update($this->leaveDetailsTable,leave_status,'id',$value);

    }






}









































