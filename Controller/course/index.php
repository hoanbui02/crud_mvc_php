<?php
    // include "Model/DBConfig.php";

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = '';
    }

    $thanhcong = array();

    switch ($action) {
        case 'add': {
            if (isset($_POST['add_course'])) {
                $CourseTitle = $_POST['CourseTitle'];

                if ($db->InsertDataCourse($CourseTitle)) {
                    $thanhcong[] = 'add_success';
                }
            }
            require_once ('View/course/add_CO.php');
            break;
        }

        case 'edit': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tblTable = "course";
                $dataID = $db->getDataIDCourse($tblTable, $id);

                if (isset($_POST['update_course'])) {

                    // lấy dữ liệu từ view
                    $CourseTitle = $_POST['CourseTitle'];

                    // truyền dữ liệu lấy được từ view sang model
                    if ($db->UpdateDataCourse($id, $CourseTitle)) {
                        header('location: index.php?controller=course&action=list');
                    } 
                }
            }
            require_once ('View/course/edit_CO.php');
            break;
        } 


        // id của đối tượng cần xoá!!
        case 'delete': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tblTable = "course";

                if ($db->DeleteCourse($id, $tblTable)) {
                    header('location: index.php?controller=course&action=list');
                } 
            } else {
                header('location: index.php?controller=course&action=list');
            }
            //require_once ('View/student/delete_user.php');
            break;
        }
        case 'list': {
            $tblTable = "course";
            $db->getData($tblTable);
            $data = $db->getAllData($tblTable);
            require_once ('View/course/list_CO.php');
            break;
        }
        case 'search': {
            if (isset($_GET['tukhoa'])) {
                $key = $_GET['tukhoa'];
                $tblTable = "course";

                // Lấy dữ liệu từ model: file DBConfig.php
                $data_Search = $db->SearchDataCourse($tblTable, $key);
            }
            require_once('View/course/search_CO.php');
            break;
        }
        default: {
            require_once ('View/course/list_CO.php');
        }
    }
?>