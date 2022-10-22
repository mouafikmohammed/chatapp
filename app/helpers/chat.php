<?php

function getChats($id_1,$id_2,$conn){

   $sql = "SELECT * FROM chats 
           WHERE (from_id=? AND to_id=?)
           OR    (to_id=? AND from_id=?)
           ORDER BY chat_id ASC";
   $stmt = 
}