<div class="page">
  <div class="chat-device">
    <div class="top-bar"></div>
    <div class="sleep"></div>
    <div class="volume"></div>
    <div class="camera"></div>
    <div class="screen">
      <div class="screen-container">
        <div class="status-bar">
          <div class="time"></div> 
          </div>
        </div>
        <div class="chat">
          <div class="chat-container">
            <div class="user-bar">
              <div class="back">
                <i class="zmdi zmdi-arrow-left"></i>
              </div>
              <div class="avatar">
                <img src="https://avatars2.githubusercontent.com/u/398893?s=128" alt="Avatar">
              </div>
              <div class="name">
                <span>User</span>
                <span class="status">online</span>
              </div>
              <div class="actions more">
                <i class="zmdi zmdi-more-vert"></i>
              </div>
              <div class="actions attachment">
                <i class="zmdi zmdi-attachment-alt"></i>
              </div>
              <div class="actions">
                <i class="zmdi zmdi-phone"></i>
              </div>
            </div>
            <div class="conversation">
              <div class="conversation-container">
                <div class="message sent">
                 <?php include("db.php");$q = $_GET['q'];
$sql="SELECT * FROM ios WHERE Message LIKE '%".$q."%'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
    
	echo""  . $row['Name'];
    echo "" . $row['Message'] ;
  }?>

                  <span class="metadata">
                      <span class="time"></span><span class="tick"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"></svg></span>
                  </span>
                </div>
                <div class="message received">
                  <?php include("db.php");$q = $_GET['q'];
$sql="SELECT * FROM ios WHERE Message LIKE '%".$q."%'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
    
	echo""  . $row['Name'];
    echo "" . $row['Message'] ;
  }?>
                  <span class="metadata"><span class="time"><</span></span>
                </div>
                <div class="message sent">
                  <?php include("db.php");$q = $_GET['q'];
$sql="SELECT * FROM ios WHERE Message LIKE '%".$q."%'ORDER BY Time DESC";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
    
	echo"<br><br>"  . $row['Name'];
    echo "<br><br>" . $row['Message'] ;
  }?>
                  <span class="metadata">
                      <span class="time"></span><span class="tick"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"></svg></span>
                  </span>
                </div>
              <form class="conversation-compose">
                <div class="emoji">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="smiley" x="3147" y="3209"></svg>
                </div>
                <input class="input-msg" name="input" placeholder="Type a message" autocomplete="off" autofocus></input>
                <div class="photo">
                  <i class="zmdi zmdi-camera"></i>
                </div>
                <button class="send">
                    <div class="circle">
                      <i class="zmdi zmdi-mail-send"></i>
                    </div>
                  </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






    
