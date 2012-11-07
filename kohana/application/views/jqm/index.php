<?php defined('SYSPATH') or die('No direct script access.'); ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>jquery mobile TEST</title>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
  <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
</head>

<body>
<div data-role="page" id="home">

   <div data-role="header">
    <h1>Home</h1>
  </div>
 
  <div data-role="content">
    <p><a href="#about" data-role="button" data-icon="arrow-u" data-transition="slideup">About</a></p>    
  </div>
  <div data-role="content">
    <p><a href="#page2" data-role="button" data-icon="arrow-r" data-transition="slide">Page2</a></p>    
  </div>
  <div data-role="content">
    <!--<p>jqMobi Test</p>   -->  
  </div>
  
  <div id="shipDiv" data-role="fieldcontain">
  <label for="shipNo"> EMPTY</label>
  <input id="shipNo" name="shipNo_r" type="text" />
</div>
 
   <div id="stateDiv" data-role="fieldcontain">
    <label id="stateLabel" for="state">List</label>
    <select id="state" name="state_r" tabindex="2">
      <option value="ZZ">Please select</option>
      <option value="AL">A</option>
      <option value="AK">B</option>
      <option value="AZ">C</option>
    </select>
  </div>
 
</div>
 
<div data-role="page" id="about">
 
  <div data-role="header">
    <h1>About This App</h1>
  </div>
 
  <div data-role="content">
    <p>Information <a href="#home" data-role="button" data-icon="arrow-l">Go home</a></p>   
  </div>
 
</div>

<div data-role="page" id="page2">
 
  <div data-role="header">
    <h1>Page2</h1>
  </div>
 
  <div data-role="content">
    <p>This is a second page <a href="#home" data-role="button" data-icon="arrow-l">Go home</a></p>   
  </div>
 
</div>
 
</body>
</html>