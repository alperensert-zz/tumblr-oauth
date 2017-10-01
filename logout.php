<?php
session_start(); #start session#
session_destroy(); #die session#

header("location: connect.php"); # redirect for new connection #
