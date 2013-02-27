<?php

var_dump($_POST);
//echo "newCleintSales";
if ($_POST["btnKyc"]=="Save")
{
echo "KYC";	# code...
}
if($_POST["btnSales"]=="Save")
{
	echo "SAVE";
}

if($_POST["btnProInfo"]=="Save")
{
	echo "btnProInfo";
}
if($_POST["btnService"]=="Save")
{
	echo "btnService";
}
if($_POST["btnHosting"]=="Save")
{
	echo "btnHosting";
}
if($_POST["btnWebsite"]=="Save")
{
	echo "btnWebsite";
}
?>