<?php

//Framework PHPunit
use PHPUnit\Framework\TestCase;


require_once "a_m_daftarPeminjam.php";


class TestPinjamanOnline extends TestCase 
{
     public function testSelectPrk() {

        //Memakai class a_m_daftarPeminjam untuk di test
         $test = new a_m_daftarPeminjam;

         //Memasukkan Id
         $ChooseId = 1;
         $CheckId = $test->selectPrk($ChooseId);

         //Testing
         $this->assertEquals(1, $CheckId);
     }

    //  public function testUpdatePrk() {

    //      //Memakai class a_m_daftarPeminjam untuk di test
    //      $test = new a_m_daftarPeminjam;

    //      //Memasukkan Id dan nominal
    //      $ChooseId = 1;
    //      $ChoosePinjaman = 20000;

    //      $testIdNominal = $test->updatePrk($ChooseId, $ChoosePinjaman);

    //      //Testing
    //      $this->assertEquals(1, $testIdNominal);
    //  }

    //  public function testDeletePrk() {
    //      //Memakai class a_m_daftarPeminjam untuk di test
    //      $test = new a_m_daftarPeminjam;
        
    //      //Memasukkan id untuk dihapus
    //      $ChooseId = 2;
    //      $CheckId = $test->deletePrk($ChooseId);

    //      //Testing
    //      $this->assertEquals(2, $CheckId);
    // }

    // public function testInsertPrk() {
    //     //Memakai class a_m_daftarPeminjam untuk di test
    //     $test = new a_m_daftarPeminjam;
        
    //     //Memasukan id, nominal, durasiTenor dan total Tagihan
    //     $id = 1;
    //     $nominalPinjaman = 20000;
    //     $durasiTenor = 3;
    //     $totalTagihan = 100000;

    //     $testInsert = $test->insertPrk($id, $nominalPinjaman, $durasiTenor, $totalTagihan);

    //     //testing
    //     $this->assertEquals(4, $testInsert);
    // }

    // // function insertPrk($id, $nominalPinjaman, $durasiTenor, $totalTagihan){
    // //     $query = "UPDATE user SET nominalPinjaman=$nominalPinjaman, durasiTenor = $durasiTenor, totalTagihan =$totalTagihan, Time= 0 WHERE id = $id";
    // //     return $this->execute($query);
    // // }

    // public function testInsertNo() {
    //     //Memakai class a_m_daftarPeminjam untuk di test
    //     $test = new a_m_daftarPeminjam;

    //     //memasukan id nominal pinjaman
    //     $id = 1;
    //     $nominalPinjaman = 1;
        
    //     $testInsertno = $test->insertNo($id, $nominalPinjaman);

    //     $this->assertEquals(5, $testInsertno);
    // }

    // public function testfetch() {
    //     //Memakai class class a_m_daftarPeminjam untuk di test
    //     $test = new a_m_daftarPeminjam;
    }   
 

?>