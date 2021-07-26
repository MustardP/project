<?php
DB::table('dialog')->insert([
    'username' => Auth::user()->name,
    'message' =>$_POST['text']
]);
