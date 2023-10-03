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
            if (isset($_POST['add_user'])) {
                $masv = $_POST['masv'];
                $hoten = $_POST['hoten'];
                $lop = $_POST['lop'];
                $ClassID = $_POST['ClassID'];
                $CourseID = $_POST['CourseID'];

                if ($db->InsertData($masv, $hoten, $lop, $ClassID, $CourseID)) {
                    $thanhcong[] = 'add_success';
                }
            }
            require_once ('View/student/add_user.php');
            break;
        }
        case 'edit': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tblTable = "student";
                $dataID = $db->getDataID($tblTable, $id);

                if (isset($_POST['update_user'])) {

                    // lấy dữ liệu từ view
                    $masv = $_POST['masv'];
                    $hoten = $_POST['hoten'];
                    $lop = $_POST['lop'];
                    $ClassID = $_POST['ClassID'];
                    $CourseID = $_POST['CourseID'];

                    // truyền dữ liệu lấy được từ view sang model
                    if ($db->UpdateData($id, $masv, $hoten, $lop, $ClassID, $CourseID)) {
                        header('location: index.php?controller=student&action=list');
                    } 
                }
            }
            require_once ('View/student/edit_user.php');
            break;
        }
        case 'delete': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tblTable = "student";

                if ($db->Delete($id, $tblTable)) {
                    header('location: index.php?controller=student&action=list');
                } 
            } else {
                header('location: index.php?controller=student&action=list');
            }
            //require_once ('View/student/delete_user.php');
            break;
        }
        case 'list': {
            $tblTable = "student";
            $db->getData($tblTable);
            $data = $db->getAllData($tblTable);
            require_once ('View/student/list.php');
            break;
        }
        case 'search': {
            if (isset($_GET['tukhoa'])) {
                $key = $_GET['tukhoa'];
                $tblTable = "student";

                // Lấy dữ liệu từ model: file DBConfig.php
                $data_Search = $db->SearchData($tblTable, $key);
            }
            require_once('View/student/search_user.php');
            break;
        }
        default: {
            require_once ('View/student/list.php');
        }
    }
?>