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
            if (isset($_POST['add_class'])) {
                $ClassTitle = $_POST['ClassTitle'];

                if ($db->InsertDataClass($ClassTitle)) {
                    $thanhcong[] = 'add_success';
                }
            }
            require_once('View/class/add_C.php');
            break;
        }

    case 'edit': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tblTable = "class";
                $dataID = $db->getDataIDClass($tblTable, $id);

                if (isset($_POST['update_class'])) {

                    // lấy dữ liệu từ view
                    $ClassTitle = $_POST['ClassTitle'];

                    // truyền dữ liệu lấy được từ view sang model
                    if ($db->UpdateDataClass($id, $ClassTitle)) {
                        header('location: index.php?controller=class&action=list');
                    }
                }
            }
            require_once('View/class/edit_C.php');
            break;
        }

    case 'delete': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tblTable = "class";

                if ($db->DeleteClass($id, $tblTable)) {
                    header('location: index.php?controller=class&action=list');
                }
            } else {
                header('location: index.php?controller=class&action=list');
            }
            //require_once ('View/student/delete_user.php');
            break;
        }
    case 'list': {
            $tblTable = "class";
            $db->getData($tblTable);
            $data = $db->getAllData($tblTable);
            require_once('View/class/list_C.php');
            break;
        }
    case 'search': {
            if (isset($_GET['tukhoa'])) {
                $key = $_GET['tukhoa'];
                $tblTable = "class";

                // Lấy dữ liệu từ model: file DBConfig.php
                $data_Search = $db->SearchDataClass($tblTable, $key);
            }
            require_once('View/class/search_C.php');
            break;
        }
    default: {
            require_once('View/class/list_C.php');
        }
}
