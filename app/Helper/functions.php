<?php

use App\Models\User;
use App\Models\MapClass;

function addMappingIfStudent($role, $studentClass, $userId)
{
  if ($role == 'student') {
    MapClass::create([
      'class_id' => $studentClass,
      'user_id' => $userId
    ]);
  }
}

function getAbbreviation($id)
{
  $name = User::whereId($id)->first();
  $words = explode(" ", $name->name);
  $acronym = "";

  foreach ($words as $w) {
    $acronym .= mb_substr($w, 0, 1);
  }

  return $acronym;
}

function totalStudents()
{
  $count = strlen(User::role('student')->count()) == 1 ? '0' . User::role('student')->count() : User::role('student')->count();
  return $count;
}

function totalTeachers()
{
  $count = strlen(User::role('teacher')->count()) == 1 ? '0' . User::role('teacher')->count() : User::role('teacher')->count();
  return $count;
}
