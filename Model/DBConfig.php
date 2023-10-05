<?php
    class Database {
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass = '';
        private $dbname = 'mvc_student2';

        private $conn = NULL;
        private $result = NULL;

        public function connect()
        {
            $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
            if (!$this->conn) {
                echo "Connect failed!";
                exit();
            } else {
                mysqli_set_charset($this->conn, 'utf8');
            }
            return $this->conn;
        }

        // Thực thi câu lệnh truy vấn
        public function execute($sql)
        {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        // Phương thức lấy dữ liệu
        public function getData()
        {
            if ($this->result) {
                $data = mysqli_fetch_array($this->result);
            } else {
                $data = 0;
            }
            return $data;
        }

        // Phương thức lấy toàn bộ dữ liệu
        public function getAllData($table)
        {
            $sql = "SELECT * FROM $table";
            $this->execute($sql);
            if ($this->num_rows() == 0) {
                $data = 0;
            } else {
                while ($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        // Phương thức lấy dữ liệu cần sửa theo ID
        public function getDataID($table, $id)
        {
            $sql = "SELECT * FROM $table WHERE id = '$id'";
            $this->execute($sql);
            if ($this->num_rows() != 0) {
                $data = mysqli_fetch_array($this->result);
            } else {
                $data = 0;
            }
            return $data;
        }

        public function getDataIDClass($table, $ClassID)
        {
            $sql = "SELECT * FROM $table WHERE ClassID = '$ClassID'";
            $this->execute($sql);
            if ($this->num_rows() != 0) {
                $data = mysqli_fetch_array($this->result);
            } else {
                $data = 0;
            }
            return $data;
        }

        public function getDataIDCourse($table, $CourseID)
        {
            $sql = "SELECT * FROM $table WHERE CourseID = '$CourseID'";
            $this->execute($sql);
            if ($this->num_rows() != 0) {
                $data = mysqli_fetch_array($this->result);
            } else {
                $data = 0;
            }
            return $data;
        }

        // Phương thức đếm số bản ghi
        public function num_rows()
        {
            if ($this->result) {
                $num = mysqli_num_rows($this->result);
            } else {
                $num = 0;
            }
            return $num;
        }

        // Phương thức thêm dữ liệu
        public function InsertData($masv, $hoten, $lop, $ClassID, $CourseID)
        {
            $sql = "INSERT INTO student(id, masv, hoten, lop, ClassID, CourseID) VALUES (null, '$masv', '$hoten', '$lop', '$ClassID', '$CourseID')";
            return $this->execute($sql);
        } 

        
        public function InsertDataClass($ClassTitle)
        {
            $sql = "INSERT INTO class(ClassID, ClassTitle) VALUES (null, '$ClassTitle')";
            return $this->execute($sql);
        }

        public function InsertDataCourse($CourseTitle)
        {
            $sql = "INSERT INTO course(CourseID, CourseTitle) VALUES (null, '$CourseTitle')";
            return $this->execute($sql);
        }

        // Phương thức sửa dữ liệu
        public function UpdateData($id, $masv, $hoten, $lop, $ClassID, $CourseID)
        {
            $sql = "UPDATE student SET masv = '$masv', hoten = '$hoten', lop = '$lop', ClassID = '$ClassID', CourseID = '$CourseID' WHERE id = '$id'";
            return $this->execute($sql);
        }

        public function UpdateDataClass($ClassID, $ClassTitle)
        {
            $sql = "UPDATE class SET ClassTitle = '$ClassTitle' WHERE ClassID = '$ClassID'";
            return $this->execute($sql);
        }

        public function UpdateDataCourse($CourseID, $CourseTitle)
        {
            $sql = "UPDATE course SET CourseTitle = '$CourseTitle' WHERE CourseID = '$CourseID'";
            return $this->execute($sql);
        }

        // Phương thức xoá
        public function Delete($id, $table)
        {
            $sql = "DELETE FROM $table WHERE id = '$id'";
            return $this->execute($sql);   
        }

        public function DeleteClass($ClassID, $table)
        {
            $sql = "DELETE FROM $table WHERE ClassID = '$ClassID'";
            return $this->execute($sql);   
        }

        public function DeleteCourse($CourseID, $table)
        {
            $sql = "DELETE FROM $table WHERE CourseID = '$CourseID'";
            return $this->execute($sql);   
        }


        // Phương thức tìm kiếm dữ liệu theo từ khoá
        public function SearchData($table, $key)
        {
            $sql = "SELECT * FROM $table WHERE hoten REGEXP '$key' ORDER BY id DESC";
            $this->execute($sql);
            if ($this->num_rows() == 0) {
                $data = 0;
            } else {
                while ($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function SearchDataClass($table, $key)
        {
            $sql = "SELECT * FROM $table WHERE ClassTitle REGEXP '$key' ORDER BY ClassID DESC";
            $this->execute($sql);
            if ($this->num_rows() == 0) {
                $data = 0;
            } else {
                while ($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function SearchDataCourse($table, $key)
        {
            $sql = "SELECT * FROM $table WHERE CourseTitle REGEXP '$key' ORDER BY CourseID DESC";
            $this->execute($sql);
            if ($this->num_rows() == 0) {
                $data = 0;
            } else {
                while ($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

    }
?>