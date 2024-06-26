# Timezonify

**Timezonify** is a PHP package to convert date/time strings or timestamps to a custom timezone.

## Installation

Use Composer to install the package:

```bash
composer require me-ruhin/timezonify
```

```
<?php

require_once 'vendor/autoload.php'; // Load Composer's autoloader

use DateConverter\DateConverter;

// Example usage
$dateTimeString = '2024-06-26 15:30:00';
$timestamp = strtotime($dateTimeString);

$convertedDateTime = DateConverter::convertToTimezone($dateTimeString, 'America/New_York');
$convertedTimestamp = DateConverter::convertToTimezone($timestamp, 'America/New_York');

echo "Converted DateTime String: $convertedDateTime\n";
echo "Converted Timestamp: $convertedTimestamp\n";
```