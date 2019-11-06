<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Export extends MX_Controller {
    // construct
    public function __construct() {
        parent::__construct();
        // load model
        $this->load->model('Export_model', 'export');
    }    
 
    public function index() {
        $data['export_list'] = $this->export->exportList();
        $this->load->view('about', $data);
    }
    // create xlsx
    public function generateXls() {
        // create file name
        $fileName = 'data-'.time().'.xlxs';  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->export->exportList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Tên Thành Viên');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Cấp Bậc');
        
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->user_fullname);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->user_email);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->user_level);
            $rowCount++;
        }
        $filename = "webdemo". date("Y-m-d-H-i-s").".xlsx";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
        $objWriter->save('php://output'); 
    }

    // create xlsx
    public function genproduct() {
        $total_books =  $this->export->tong();
		$productpage	=  50; /* Số books hiển thị trên một page*/
        # Tải bộ thư viện Pagination Class của CodeIgniter
		$this->load->library('pagination');
		$config['total_rows']  =  $total_books;
        $config['page_query_string'] = TRUE;
        $config['uri_segment']	 =  2;
        # Khởi tạo phân trang
		$this->pagination->initialize($config); 
        $tong = $this->export->tong();
        $a_Data = 50;
        $solanlap = (ceil($tong/$a_Data));
        $off = 1;

        # Đẩy dữ liệu ra view
        $totalex = array();
        for ($off=1; $off <= $solanlap; $off++) { 
            $nhan = ($off*50);
            $a_Data =  $this->export->phantrangex($productpage, $nhan);
            $totalex = array_merge($totalex, $a_Data);
        }

        // create file name
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->export->exproduct();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Tên Sản Phẩm');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Mô Tả Sản Phẩm');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Giá Tiền');
        
        // set Row
        
        $rowCount = 2;
        foreach ($listInfo as $row ) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $row->pr_title);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $row->pr_description);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $row->pr_price);
            $rowCount++;
        }
        $filename = "webdemo". date("Y-m-d-H-i-s").".xlsx";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
        $objWriter->save('php://output'); 
    }
}
?>