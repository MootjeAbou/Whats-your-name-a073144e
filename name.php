<?php
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

echo 'Arnold once said: "I\'ll be back"';

echo 'You deleted C:\\*.*?';

echo 'You deleted C:\*.*?';

echo 'This will not expand: \n a newline';

echo 'Variables do not $expand $either';

class System {

    const OS_UNKNOWN = 1;
    const OS_WIN = 2;
    const OS_LINUX = 3;
    const OS_OSX = 4;

    /**
     * @return int
     */
    static public function getOS() {
        switch (true) {
            case stristr(PHP_OS, 'DAR'): return self::OS_OSX;
            case stristr(PHP_OS, 'WIN'): return self::OS_WIN;
            case stristr(PHP_OS, 'LINUX'): return self::OS_LINUX;
            default : return self::OS_UNKNOWN;
        }
    }

}

$a_bool = TRUE;
$a_str  = "foo";
$a_str2 = 'foo';
$an_int = 12;

echo gettype($a_bool);
echo gettype($a_str);

if (is_int($an_int)) {
    $an_int += 4;
}

if (is_string($a_bool)) {
    echo "String: $a_bool";
}

<?php
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

echo 'Arnold once said: "I\'ll be back"';

echo 'You deleted C:\\*.*?';

echo 'You deleted C:\*.*?';

echo 'This will not expand: \n a newline';

echo 'Variables do not $expand $either';
?>
?>