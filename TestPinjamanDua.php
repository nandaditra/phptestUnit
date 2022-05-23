<?php


 session_start();
//Framework PHPunit
use PHPUnit\Framework\TestCase;

require_once "a_c_daftarPeminjam.php";

class TestPinjamanDua extends TestCase
{

    public function testIndex() {

        //data dari a_m_daftarPeminjam.php
        $test2 = new a_m_daftarPeminjam();
        $test3 = new a_m_daftarPeminjam();

        //Memasukkan data
        $Insertdata = "SELECT * FROM user";
        
        //Penginisialisasi
        $testuser = $test2->execute($Insertdata);
        $testBun =  $test3->selectAll();
                  

        $this->assertEquals($testuser, $testBun);

    }

    public function testViewEdit() {

       //data dari a_m_daftarPeminjam.php
       $test1 = new a_m_daftarPeminjam();
       $test2 = new a_m_daftarPeminjam();

       //memasukkan Data
       $data = 22;
       $choosdata = "SELECT * FROM user WHERE id=$data";

       $nomor = $test1->selectPrk($data);
       $namer = $test2->selectPrk($choosdata);
       
       $this->assertEquals($nomor, $namer);
    }

    public function testUpdate() {
      
        //data dari a_m_daftarPeminjam.php

        $test1 = new a_m_daftarPeminjam();
        $test2 = new a_m_daftarPeminjam();
     
         
        //memasukkan Data
        $id = 2;
        $nominalBayarCicilan = 200000;

        $query = "UPDATE user SET totalTagihan=totalTagihan-$nominalBayarCicilan, Time = Time + 1 WHERE id = '$id'";
        
        $check1 = $test1->execute($query);
        $check2 = $test2->updatePrk($id, $nominalBayarCicilan);

        $this->assertEquals($check1, $check2);
    }

    public function testDelete() {
        //data dari a_m_daftarPeminjam.php

        $test1 = new a_m_daftarPeminjam();
        $test2 = new a_m_daftarPeminjam();
     
        //Memasukkan Data
        $nomor = 1;
 
        $query = "DELETE FROM user WHERE id='$nomor'";
        
        $check1 =  $test1->deletePrk($nomor);
        $check2 =  $test2->deletePrk($query);

        $this->assertEquals($check1, $check2);
    }

    public function testinsertNominal() {
        $test1 = new a_m_daftarPeminjam();
        $test2 = new a_m_daftarPeminjam();

        
        $id = 1;
        $nominalPinjaman = 20000;

        $query = "INSERT INTO user VALUES ('$id', '$nominalPinjaman')";

        $check1 = $test1->execute($query);
        $check2 = $test2->insertNo($id, $nominalPinjaman);

        $this->assertEquals($check1, $check2);
    }

}



?>