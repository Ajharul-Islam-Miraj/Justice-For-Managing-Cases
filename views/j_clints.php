<?php
    include 'judge_header.php';
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
  <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-3" action="index.html" method="post">
      <input class="form-control text-center form-control-md mr-3 w-50" name="search" id="search" type="text" placeholder="Search by NID...">
      <i class="fas fa-search fa-lg" aria-hidden="true"></i>
      <table class="table table-hover mt-2">
       <thead>
         <tr>
           <th>ID</th>
           <th>Fullname</th>
           <th>Username</th>
           <th>Email</th>
           <th>Phone</th>
           <th>NID</th>
           <th>Birthdate</th>
           <th>gender</th>
          <th>Address</th>
         </tr>
       </thead>
       <tbody id="output">

       </tbody>
     </table>
</form>
<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'search.php',
        data:{
          nid:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });

});
</script>

</body>
</html>
