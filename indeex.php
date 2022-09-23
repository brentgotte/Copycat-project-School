<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="style.css">
                <link href="scrum/codemirror.css" rel="stylesheet"/>
                    <script src="scrum/codemirror.js"></script>
                         <script src="scrum/xml.js"></script>
                             <script src="codemirror-5.65.5/mode/javascript/javascript.js"></script>
                         <script src="codemirror-5.65.5/addon/edit/closetag.js"></script>
                     <script src="codemirror-5.65.5/addon/edit/closebrackets.js"></script>
                <script src="codemirror-5.65.5/mode/clike/clike.js"></script>
            <script src="codemirror-5.65.5/mode/css/css.js"></script>
        <script src="codemirror-5.65.5/addon/display/placeholder.js"></script>
    <script src="codemirror-5.65.5/mode/php/php.js"></script>
<script src="codemirror-5.65.5/mode/sql/sql.js"></script>
    <link href="scrum/dracula.css" rel="stylesheet"/>

</head>

<body>
<div class="icon-bar">
    <div class="naam">
    <p>Copycat</p>
</div>
</div>
<div class ="description">
<h3>Copycat is a platform to highlight code and share it with your friends!</h3>
</div>
<div class ="textblock">
<form action="link.php" method="post">
    <div class="CodeMirror"> 
    <textarea id="textblock" name="textblock" rows="35" cols="100"placeholder="Write your code here!"></textarea>
    </div> <br>
    <label for="language">Choose a language:</label>
    <select id="language" name="language">
        <option value="xml">HTML</option>
        <option value="css">CSS</option>
        <option value="php">PHP</option>
        <option value="sql">SQL</option>
        <option value="javascript">javascript</option>
        <input type="submit" value="Submit">
    </select>
    
</form>
<script src="main.js"></script>
</body>

</html>