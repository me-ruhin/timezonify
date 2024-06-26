<?php

namespace DateConverter;

class DateConverter
{
  public static function convertToTimezone($dateTime, $timezone)
  {
    // Create a DateTime object based on the input
    if (is_numeric($dateTime)) {
      $dateTime = new \DateTime("@$dateTime");
    } else {
      $dateTime = new \DateTime($dateTime);
    }

    // Set the timezone
    $dateTime->setTimezone(new \DateTimeZone($timezone));

    // Format the DateTime as per your requirement
    return $dateTime->format('Y-m-d H:i:s');
  }
}
