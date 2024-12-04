<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course = $_POST["course"];
    $doa = $_POST["doa"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $civilstatus = $_POST["civilstatus"];
    $contact = $_POST["contact"];
    $citizenship = $_POST["citizenship"];
    $religion = $_POST["religion"];
    $permanentaddress = $_POST["permanentaddress"];
    $shsname = $_POST["shsname"];
    $shsaddress = $_POST["shsaddress"];
    $shsstrand = $_POST["shsstrand"];
    $shsdategraduated = $_POST["shsdategraduated"];
    $highschoolname = $_POST["highschoolname"];
    $jhsaddress = $_POST["jhsaddress"];
    $jhsdategraduated = $_POST["jhsdategraduated"];

    try {
        require_once "dbh.inc.php";
        
        $query = "INSERT INTO testone (Course, Doa, FullName, Email, Dob, Gender, CivilStatus, Contact, Citizenship, Religion, PermanentAddress, ShsName, ShsAddress, ShsStrand, ShsDateGraduated, HighSchoolName, JhsAddress, JhsDateGraduated) VALUES (:course, :doa, :fullname, :email, :dob, :gender, :civilstatus, :contact, :citizenship, :religion, :permanentaddress, :shsname, :shsaddress, :shsstrand, :shsdategraduated, :highschoolname, :jhsaddress, :jhsdategraduated);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam("course", $course);
        $stmt->bindParam("doa", $doa);
        $stmt->bindParam("fullname", $fullname);
        $stmt->bindParam("email", $email);
        $stmt->bindParam("dob", $dob);
        $stmt->bindParam("gender", $gender);
        $stmt->bindParam("civilstatus", $civilstatus);
        $stmt->bindParam("contact", $contact);
        $stmt->bindParam("citizenship", $citizenship);
        $stmt->bindParam("religion", $religion);
        $stmt->bindParam("permanentaddress", $permanentaddress);
        $stmt->bindParam("shsname", $shsname);
        $stmt->bindParam("shsaddress", $shsaddress);
        $stmt->bindParam("shsstrand", $shsstrand);
        $stmt->bindParam("shsdategraduated", $shsdategraduated);
        $stmt->bindParam("highschoolname", $highschoolname);
        $stmt->bindParam("jhsaddress", $jhsaddress);
        $stmt->bindParam("jhsdategraduated", $jhsdategraduated);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../SECOND-FORM.html");
    } catch (Exception $e) {
        die("Query failed". $e->getMessage());
    }

} else {
    header("Location: ../SECOND-FORM.html");
}
