.navigation {
  width: 100%;
  background-color: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>
}

.navigation td {
  margin: 0;
  padding: 0;
  padding-left: 2px!important;
  vertical-align: middle;
  white-space: nowrap
}

.navigation_separator {
  color: #eee;
  display: inline-block;
  font-size: 1.5em;
  text-align: center;
  height: 1.4em
}

.navigation input[type=submit] {
  background: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['NaviPointerBackground'] ?>;
  box-shadow: none;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>;
  filter: none;
  margin: 5px;
  padding: 0.4em
}

.navigation input[type=submit]:hover, .navigation input.edit_mode_active {
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  cursor: pointer;
  background-color: <?php echo $GLOBALS['cfg']['ButtonHover'] ?>
}

.navigation input[type=submit]:focus {
  box-shadow: none
}

.navigation select {
  margin: 0 0.8em;
  border: none
}

.navigation input[type=text] {
  border: none
}

.navigation_goto {
  width: 100%
}
