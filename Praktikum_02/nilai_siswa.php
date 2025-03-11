<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

/*
- Mendefinisikan Variabel
- Nilai Akhir
- Status
- Grade
- Predikat
*/

/*
- MENENTUKAN LULUS ATAU TIDAK MENGGUNAKAN IF ELSE
- SISWA DINYATAKAN LULUS JIKA NILAI TOTAL dengan presentase 30% UTS, 35% UAS dan TUGAS 35% melebihi 55
if (condition) {
    code to be executed if condition is true;
} else {
    code to be executed if condition is false;
}
*/

$nilai_total = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

if ($nilai_total >= 55) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

// MENENTUKAN GRADE NILAI MENGGUNAKAN SYNTAX IF ELSEIF MULTIKONDISI
/*
- Grade E : Jika Nilai Akhir 0-35
- Grade D : Jika Nilai Akhir 36-55
- Grade C : Jika Nilai Akhir 56-69
- Grade B : Jika Nilai Akhir 70-84
- Grade A : Jika Nilai Akhir 85-100
- Grade I : Jika Nilai Akhir < 0 atau Nilai Akhir > 100
if (condition) {
    code to be executed if this condition is true;
} elseif (condition) {
    code to be executed if this condition is true;
} else {
    code to be executed if all conditions are false;
}
*/

if ($nilai_total >= 85 && $nilai_total <= 100) {
    $grade = "A";
} elseif ($nilai_total >= 70 && $nilai_total <= 84) {
    $grade = "B";
} elseif ($nilai_total >= 56 && $nilai_total <= 69) {
    $grade = "C";
} elseif ($nilai_total >= 36 && $nilai_total <= 55) {
    $grade = "D";
} elseif ($nilai_total >= 0 && $nilai_total <= 35) {
    $grade = "E";
} else {
    $grade = "I";
}

// MENENTUKAN PREDIKAT NILAI MENGGUNAKAN SYNTAX SWITCH
/*
- Predikat Sangat Kurang : Jika Grade E
- Predikat Kurang : Jika Grade D
- Predikat Cukup : Jika Grade C
- Predikat Memuaskan : Jika Grade B
- Predikat Sangat Memuaskan : Jika Grade A
- Predikat Tidak Ada : Jika Grade I
switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    default:
        code to be executed if n is different from all labels;
}
*/

switch ($grade) {
    case "E":
        $predikat = "Sangat Kurang";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    default:
        $predikat = "Tidak Ada";
}

// MENCETAK HASIL
if (!empty($proses)) {
    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
    // Mencetak Nilai Akhir, Status, Grade, dan Predikat
    echo '<br/>Nilai Akhir : ' . $nilai_total;
    echo '<br/>Status : ' . $status;
    echo '<br/>Grade : ' . $grade;
    echo '<br/>Predikat : ' . $predikat;
}