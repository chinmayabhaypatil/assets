css:
.topnav 
{
    background-color: rgba(255,255,255,0.6);
    overflow: hidden;
}
.topnav a
{
    float: left;
    color: #0340FD;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 15px;
}
.topnav a:hover
{
    background-color: #ddd;
    color: black;
}

html:
<div class="topnav">
                <a href="dashboard.php" style="padding-left: 28px; padding-right: 25px;"><b>Home</b></a>
                <a href="#request.php"><b>Request Assets</b></a>
                <a href="#view.php"><b>View Assets</b></a>
                <a href="logout.php" style="margin-left: 870px;"><b>Sign Out</b></a>

</div>
<form action="view.php" class="inline">
    <button class="float-left submit-button" >View Assets</button>
</form>
<form action="request.php" class="inline">
    <button class="float-left submit-button" >Request assets</button>
</form>