<?php

/**
 * (PHP 4, PHP 5)<br/>
 * Gets time of last page modification
 * @link http://php.net/manual/en/function.getlastmod.php
 * @return int the time of the last modification of the current
 * page. The value returned is a Unix timestamp, suitable for
 * feeding to date. Returns false on error.
 */
function getlastmod () {}

/**
 * (PHP 4, PHP 5)<br/>
 * Decodes data encoded with MIME base64
 * @link http://php.net/manual/en/function.base64-decode.php
 * @param string $data <p>
 * The encoded data.
 * </p>
 * @param bool $strict [optional] <p>
 * Returns false if input contains character from outside the base64
 * alphabet.
 * </p>
 * @return string the original data&return.falseforfailure;. The returned data may be
 * binary.
 */
function base64_decode ($data, $strict = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Encodes data with MIME base64
 * @link http://php.net/manual/en/function.base64-encode.php
 * @param string $data <p>
 * The data to encode.
 * </p>
 * @return string The encoded data, as a string.
 */
function base64_encode ($data) {}

/**
 * (PHP 5)<br/>
 * Uuencode a string
 * @link http://php.net/manual/en/function.convert-uuencode.php
 * @param string $data <p>
 * The data to be encoded.
 * </p>
 * @return string the uuencoded data.
 */
function convert_uuencode ($data) {}

/**
 * (PHP 5)<br/>
 * Decode a uuencoded string
 * @link http://php.net/manual/en/function.convert-uudecode.php
 * @param string $data <p>
 * The uuencoded data.
 * </p>
 * @return string the decoded data as a string.
 */
function convert_uudecode ($data) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Absolute value
 * @link http://php.net/manual/en/function.abs.php
 * @param mixed $number <p>
 * The numeric value to process
 * </p>
 * @return number The absolute value of number. If the
 * argument number is
 * of type float, the return type is also float,
 * otherwise it is integer (as float usually has a
 * bigger value range than integer).
 */
function abs ($number) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Round fractions up
 * @link http://php.net/manual/en/function.ceil.php
 * @param float $value <p>
 * The value to round
 * </p>
 * @return float value rounded up to the next highest
 * integer.
 * The return value of ceil is still of type
 * float as the value range of float is 
 * usually bigger than that of integer.
 */
function ceil ($value) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Round fractions down
 * @link http://php.net/manual/en/function.floor.php
 * @param float $value <p>
 * The numeric value to round
 * </p>
 * @return float value rounded to the next lowest integer.
 * The return value of floor is still of type
 * float because the value range of float is 
 * usually bigger than that of integer.
 */
function floor ($value) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Rounds a float
 * @link http://php.net/manual/en/function.round.php
 * @param float $val <p>
 * The value to round
 * </p>
 * @param int $precision [optional] <p>
 * The optional number of decimal digits to round to.
 * </p>
 * @param int $mode [optional] <p>
 * One of PHP_ROUND_HALF_UP,
 * PHP_ROUND_HALF_DOWN,
 * PHP_ROUND_HALF_EVEN, or
 * PHP_ROUND_HALF_ODD.
 * </p>
 * @return float The rounded value
 */
function round ($val, $precision = null, $mode = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Sine
 * @link http://php.net/manual/en/function.sin.php
 * @param float $arg <p>
 * A value in radians
 * </p>
 * @return float The sine of arg
 */
function sin ($arg) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Cosine
 * @link http://php.net/manual/en/function.cos.php
 * @param float $arg <p>
 * An angle in radians 
 * </p>
 * @return float The cosine of arg
 */
function cos ($arg) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Tangent
 * @link http://php.net/manual/en/function.tan.php
 * @param float $arg <p>
 * The argument to process in radians 
 * </p>
 * @return float The tangent of arg
 */
function tan ($arg) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Arc sine
 * @link http://php.net/manual/en/function.asin.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float The arc sine of arg in radians
 */
function asin ($arg) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Arc cosine
 * @link http://php.net/manual/en/function.acos.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float The arc cosine of arg in radians.
 */
function acos ($arg) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Arc tangent
 * @link http://php.net/manual/en/function.atan.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float The arc tangent of arg in radians.
 */
function atan ($arg) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Inverse hyperbolic tangent
 * @link http://php.net/manual/en/function.atanh.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float Inverse hyperbolic tangent of arg
 */
function atanh ($arg) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Arc tangent of two variables
 * @link http://php.net/manual/en/function.atan2.php
 * @param float $y <p>
 * Dividend parameter
 * </p>
 * @param float $x <p>
 * Divisor parameter
 * </p>
 * @return float The arc tangent of y/x 
 * in radians.
 */
function atan2 ($y, $x) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Hyperbolic sine
 * @link http://php.net/manual/en/function.sinh.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float The hyperbolic sine of arg
 */
function sinh ($arg) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Hyperbolic cosine
 * @link http://php.net/manual/en/function.cosh.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float The hyperbolic cosine of arg
 */
function cosh ($arg) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Hyperbolic tangent
 * @link http://php.net/manual/en/function.tanh.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float The hyperbolic tangent of arg
 */
function tanh ($arg) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Inverse hyperbolic sine
 * @link http://php.net/manual/en/function.asinh.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float The inverse hyperbolic sine of arg
 */
function asinh ($arg) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Inverse hyperbolic cosine
 * @link http://php.net/manual/en/function.acosh.php
 * @param float $arg <p>
 * The value to process
 * </p>
 * @return float The inverse hyperbolic cosine of arg
 */
function acosh ($arg) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Returns exp(number) - 1, computed in a way that is accurate even
   when the value of number is close to zero
 * @link http://php.net/manual/en/function.expm1.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float 'e' to the power of arg minus one
 */
function expm1 ($arg) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Returns log(1 + number), computed in a way that is accurate even when
   the value of number is close to zero
 * @link http://php.net/manual/en/function.log1p.php
 * @param float $number <p>
 * The argument to process
 * </p>
 * @return float log(1 + number)
 */
function log1p ($number) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Get value of pi
 * @link http://php.net/manual/en/function.pi.php
 * @return float The value of pi as float.
 */
function pi () {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
 * Finds whether a value is a legal finite number
 * @link http://php.net/manual/en/function.is-finite.php
 * @param float $val <p>
 * The value to check
 * </p>
 * @return bool true if val is a legal finite
 * number within the allowed range for a PHP float on this platform,
 * else false.
 */
function is_finite ($val) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
 * Finds whether a value is not a number
 * @link http://php.net/manual/en/function.is-nan.php
 * @param float $val <p>
 * The value to check
 * </p>
 * @return bool true if val is 'not a number',
 * else false.
 */
function is_nan ($val) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
 * Finds whether a value is infinite
 * @link http://php.net/manual/en/function.is-infinite.php
 * @param float $val <p>
 * The value to check
 * </p>
 * @return bool true if val is infinite, else false.
 */
function is_infinite ($val) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Exponential expression
 * @link http://php.net/manual/en/function.pow.php
 * @param number $base <p>
 * The base to use
 * </p>
 * @param number $exp <p>
 * The exponent
 * </p>
 * @return number base raised to the power of exp.
 * If the result can be represented as integer it will be returned as type
 * integer, else it will be returned as type float.
 * If the power cannot be computed false will be returned instead.
 */
function pow ($base, $exp) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Calculates the exponent of <constant>e</constant>
 * @link http://php.net/manual/en/function.exp.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float 'e' raised to the power of arg
 */
function exp ($arg) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Natural logarithm
 * @link http://php.net/manual/en/function.log.php
 * @param float $arg <p>
 * The value to calculate the logarithm for
 * </p>
 * @param float $base [optional] <p>
 * The optional logarithmic base to use 
 * (defaults to 'e' and so to the natural logarithm).
 * </p>
 * @return float The logarithm of arg to 
 * base, if given, or the
 * natural logarithm.
 */
function log ($arg, $base = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Base-10 logarithm
 * @link http://php.net/manual/en/function.log10.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float The base-10 logarithm of arg
 */
function log10 ($arg) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Square root
 * @link http://php.net/manual/en/function.sqrt.php
 * @param float $arg <p>
 * The argument to process
 * </p>
 * @return float The square root of arg
 * or the special value NAN for negative numbers.
 */
function sqrt ($arg) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Calculate the length of the hypotenuse of a right-angle triangle
 * @link http://php.net/manual/en/function.hypot.php
 * @param float $x <p>
 * Length of first side
 * </p>
 * @param float $y <p>
 * Length of second side
 * </p>
 * @return float Calculated length of the hypotenuse
 */
function hypot ($x, $y) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Converts the number in degrees to the radian equivalent
 * @link http://php.net/manual/en/function.deg2rad.php
 * @param float $number <p>
 * Angular value in degrees 
 * </p>
 * @return float The radian equivalent of number
 */
function deg2rad ($number) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Converts the radian number to the equivalent number in degrees
 * @link http://php.net/manual/en/function.rad2deg.php
 * @param float $number <p>
 * A radian value
 * </p>
 * @return float The equivalent of number in degrees
 */
function rad2deg ($number) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Binary to decimal
 * @link http://php.net/manual/en/function.bindec.php
 * @param string $binary_string <p>
 * The binary string to convert
 * </p>
 * @return number The decimal value of binary_string
 */
function bindec ($binary_string) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Hexadecimal to decimal
 * @link http://php.net/manual/en/function.hexdec.php
 * @param string $hex_string <p>
 * The hexadecimal string to convert
 * </p>
 * @return number The decimal representation of hex_string
 */
function hexdec ($hex_string) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Octal to decimal
 * @link http://php.net/manual/en/function.octdec.php
 * @param string $octal_string <p>
 * The octal string to convert
 * </p>
 * @return number The decimal representation of octal_string
 */
function octdec ($octal_string) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Decimal to binary
 * @link http://php.net/manual/en/function.decbin.php
 * @param int $number <p>
 * Decimal value to convert
 * </p>
 * <table>
 * Range of inputs on 32-bit machines
 * <tr valign="top">
 * <td>positive number</td>
 * <td>negative number</td>
 * <td>return value</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td></td>
 * <td>0</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td></td>
 * <td>1</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td></td>
 * <td>10</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483646</td>
 * <td></td>
 * <td>1111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483647 (largest signed integer)</td>
 * <td></td>
 * <td>1111111111111111111111111111111 (31 1's)</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483648</td>
 * <td>-2147483648</td>
 * <td>10000000000000000000000000000000</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>4294967294</td>
 * <td>-2</td>
 * <td>11111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>4294967295 (largest unsigned integer)</td>
 * <td>-1</td>
 * <td>11111111111111111111111111111111 (32 1's)</td>
 * </tr>
 * </table>
 * <table>
 * Range of inputs on 64-bit machines
 * <tr valign="top">
 * <td>positive number</td>
 * <td>negative number</td>
 * <td>return value</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td></td>
 * <td>0</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td></td>
 * <td>1</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td></td>
 * <td>10</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>9223372036854775806</td>
 * <td></td>
 * <td>111111111111111111111111111111111111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>9223372036854775807 (largest signed integer)</td>
 * <td></td>
 * <td>111111111111111111111111111111111111111111111111111111111111111 (31 1's)</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-9223372036854775808</td>
 * <td>1000000000000000000000000000000000000000000000000000000000000000</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-2</td>
 * <td>1111111111111111111111111111111111111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-1</td>
 * <td>1111111111111111111111111111111111111111111111111111111111111111 (64 1's)</td>
 * </tr>
 * </table>
 * @return string Binary string representation of number
 */
function decbin ($number) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Decimal to octal
 * @link http://php.net/manual/en/function.decoct.php
 * @param int $number <p>
 * Decimal value to convert
 * </p>
 * @return string Octal string representation of number
 */
function decoct ($number) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Decimal to hexadecimal
 * @link http://php.net/manual/en/function.dechex.php
 * @param int $number <p>
 * Decimal value to convert
 * </p>
 * @return string Hexadecimal string representation of number
 */
function dechex ($number) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Convert a number between arbitrary bases
 * @link http://php.net/manual/en/function.base-convert.php
 * @param string $number <p>
 * The number to convert
 * </p>
 * @param int $frombase <p>
 * The base number is in
 * </p>
 * @param int $tobase <p>
 * The base to convert number to
 * </p>
 * @return string number converted to base tobase
 */
function base_convert ($number, $frombase, $tobase) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Format a number with grouped thousands
 * @link http://php.net/manual/en/function.number-format.php
 * @param float $number <p>
 * The number being formatted.
 * </p>
 * @param int $decimals [optional] <p>
 * Sets the number of decimal points.
 * </p>
 * @return string A formatted version of number.
 */
function number_format ($number, $decimals = 0) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
 * Returns the floating point remainder (modulo) of the division
  of the arguments
 * @link http://php.net/manual/en/function.fmod.php
 * @param float $x <p>
 * The dividend
 * </p>
 * @param float $y <p>
 * The divisor
 * </p>
 * @return float The floating point remainder of 
 * x/y
 */
function fmod ($x, $y) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Converts a packed internet address to a human readable representation
 * @link http://php.net/manual/en/function.inet-ntop.php
 * @param string $in_addr <p>
 * A 32bit IPv4, or 128bit IPv6 address.
 * </p>
 * @return string a string representation of the address&return.falseforfailure;.
 */
function inet_ntop ($in_addr) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Converts a human readable IP address to its packed in_addr representation
 * @link http://php.net/manual/en/function.inet-pton.php
 * @param string $address <p>
 * A human readable IPv4 or IPv6 address.
 * </p>
 * @return string the in_addr representation of the given
 * address
 */
function inet_pton ($address) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Converts a string containing an (IPv4) Internet Protocol dotted address into a proper address
 * @link http://php.net/manual/en/function.ip2long.php
 * @param string $ip_address <p>
 * A standard format address.
 * </p>
 * @return int the IPv4 address or false if ip_address
 * is invalid.
 */
function ip2long ($ip_address) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Converts an (IPv4) Internet network address into a string in Internet standard dotted format
 * @link http://php.net/manual/en/function.long2ip.php
 * @param string $proper_address <p>
 * A proper address representation.
 * </p>
 * @return string the Internet IP address as a string.
 */
function long2ip ($proper_address) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets the value of an environment variable
 * @link http://php.net/manual/en/function.getenv.php
 * @param string $varname <p>
 * The variable name.
 * </p>
 * @return string the value of the environment variable
 * varname, or false on an error.
 */
function getenv ($varname) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Sets the value of an environment variable
 * @link http://php.net/manual/en/function.putenv.php
 * @param string $setting <p>
 * The setting, like "FOO=BAR"
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function putenv ($setting) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5)<br/>
 * Gets options from the command line argument list
 * @link http://php.net/manual/en/function.getopt.php
 * @param string $options Each character in this string will be used as option characters and
 * matched against options passed to the script starting with a single
 * hyphen (-).
 * For example, an option string "x" recognizes an
 * option -x.
 * Only a-z, A-Z and 0-9 are allowed.
 * @param array $longopts [optional] An array of options. Each element in this array will be used as option
 * strings and matched against options passed to the script starting with
 * two hyphens (--).
 * For example, an longopts element "opt" recognizes an
 * option --opt.
 * Prior to PHP5.3.0 this parameter was only available on few systems
 * @return array This function will return an array of option / argument pairs or false on
 * failure.
 */
function getopt ($options, array $longopts = null) {}

/**
 * (PHP 5 &gt;= 5.1.3)<br/>
 * Gets system load average
 * @link http://php.net/manual/en/function.sys-getloadavg.php
 * @return array an array with three samples (last 1, 5 and 15
 * minutes).
 */
function sys_getloadavg () {}

/**
 * (PHP 4, PHP 5)<br/>
 * Return current Unix timestamp with microseconds
 * @link http://php.net/manual/en/function.microtime.php
 * @param bool $get_as_float [optional] <p>
 * When called without the optional argument, this function returns the string
 * "msec sec" where sec is the current time measured in the number of
 * seconds since the Unix Epoch (0:00:00 January 1, 1970 GMT), and
 * msec is the microseconds part.
 * Both portions of the string are returned in units of seconds.
 * </p>
 * <p>
 * If the optional get_as_float is set to
 * true then a float (in seconds) is returned.
 * </p>
 * @return mixed 
 */
function microtime ($get_as_float = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Get current time
 * @link http://php.net/manual/en/function.gettimeofday.php
 * @param bool $return_float [optional] <p>
 * When set to true, a float instead of an array is returned.
 * </p>
 * @return mixed By default an array is returned. If return_float
 * is set, then a float is returned.
 * </p>
 * <p>
 * Array keys:
 * "sec" - seconds since the Unix Epoch
 * "usec" - microseconds
 * "minuteswest" - minutes west of Greenwich
 * "dsttime" - type of dst correction
 */
function gettimeofday ($return_float = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets the current resource usages
 * @link http://php.net/manual/en/function.getrusage.php
 * @param int $who [optional] <p>
 * If who is 1, getrusage will be called with
 * RUSAGE_CHILDREN.
 * </p>
 * @return array an associative array containing the data returned from the system
 * call. All entries are accessible by using their documented field names.
 */
function getrusage ($who = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Generate a unique ID
 * @link http://php.net/manual/en/function.uniqid.php
 * @param string $prefix [optional] <p>
 * Can be useful, for instance, if you generate identifiers
 * simultaneously on several hosts that might happen to generate the
 * identifier at the same microsecond.
 * </p>
 * <p>
 * With an empty prefix, the returned string will
 * be 13 characters long. If more_entropy is
 * true, it will be 23 characters.
 * </p>
 * @param bool $more_entropy [optional] <p>
 * If set to true, uniqid will add additional
 * entropy (using the combined linear congruential generator) at the end
 * of the return value, which should make the results more unique.
 * </p>
 * @return string the unique identifier, as a string.
 */
function uniqid ($prefix = "", $more_entropy = false) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Convert a quoted-printable string to an 8 bit string
 * @link http://php.net/manual/en/function.quoted-printable-decode.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the 8-bit binary string.
 */
function quoted_printable_decode ($str) {}

/**
 * (PHP 5 &gt;= 5.3.0)<br/>
 * Convert a 8 bit string to a quoted-printable string
 * @link http://php.net/manual/en/function.quoted-printable-encode.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the encoded string.
 */
function quoted_printable_encode ($str) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Convert from one Cyrillic character set to another
 * @link http://php.net/manual/en/function.convert-cyr-string.php
 * @param string $str <p>
 * The string to be converted.
 * </p>
 * @param string $from <p>
 * The source Cyrillic character set, as a single character.
 * </p>
 * @param string $to <p>
 * The target Cyrillic character set, as a single character.
 * </p>
 * @return string the converted string.
 */
function convert_cyr_string ($str, $from, $to) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets the name of the owner of the current PHP script
 * @link http://php.net/manual/en/function.get-current-user.php
 * @return string the username as a string.
 */
function get_current_user () {}

/**
 * (PHP 4, PHP 5)<br/>
 * Limits the maximum execution time
 * @link http://php.net/manual/en/function.set-time-limit.php
 * @param int $seconds <p>
 * The maximum execution time, in seconds. If set to zero, no time limit
 * is imposed.
 * </p>
 * @return void 
 */
function set_time_limit ($seconds) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets the value of a PHP configuration option
 * @link http://php.net/manual/en/function.get-cfg-var.php
 * @param string $option <p>
 * The configuration option name.
 * </p>
 * @return string the current value of the PHP configuration variable specified by
 * option, or false if an error occurs.
 */
function get_cfg_var ($option) {}

/**
 * (PHP 4, PHP 5)<br/>
 * &Alias; <function>set_magic_quotes_runtime</function>
 * @link http://php.net/manual/en/function.magic-quotes-runtime.php
 * @deprecated since 5.3.0
 * @param $new_setting
 */
function magic_quotes_runtime ($new_setting) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Sets the current active configuration setting of magic_quotes_runtime
 * @link http://php.net/manual/en/function.set-magic-quotes-runtime.php
 * @deprecated since 5.3.0
 * @param bool $new_setting <p>
 * false for off, true for on.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function set_magic_quotes_runtime ($new_setting) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets the current configuration setting of magic quotes gpc
 * @link http://php.net/manual/en/function.get-magic-quotes-gpc.php
 * @return int 0 if magic quotes gpc are off, 1 otherwise.
 */
function get_magic_quotes_gpc () {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets the current active configuration setting of magic_quotes_runtime
 * @link http://php.net/manual/en/function.get-magic-quotes-runtime.php
 * @return int 0 if magic quotes runtime is off, 1 otherwise.
 */
function get_magic_quotes_runtime () {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5)<br/>
 * Import GET/POST/Cookie variables into the global scope
 * @link http://php.net/manual/en/function.import-request-variables.php
 * @param string $types <p>
 * Using the types parameter, you can specify
 * which request variables to import. You can use 'G', 'P' and 'C' 
 * characters respectively for GET, POST and Cookie. These characters are
 * not case sensitive, so you can also use any combination of 'g', 'p'
 * and 'c'. POST includes the POST uploaded file information.
 * </p>
 * <p>
 * Note that the order of the letters matters, as when using
 * "GP", the
 * POST variables will overwrite GET variables with the same name. Any
 * other letters than GPC are discarded.
 * </p>
 * @param string $prefix [optional] <p>
 * Variable name prefix, prepended before all variable's name imported
 * into the global scope. So if you have a GET value named
 * "userid", and provide a prefix
 * "pref_", then you'll get a global variable named
 * $pref_userid.
 * </p>
 * <p>
 * Although the prefix parameter is optional, you
 * will get an E_NOTICE level
 * error if you specify no prefix, or specify an empty string as a
 * prefix. This is a possible security hazard. Notice level errors are
 * not displayed using the default error reporting level.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function import_request_variables ($types, $prefix = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Send an error message somewhere
 * @link http://php.net/manual/en/function.error-log.php
 * @param string $message <p>
 * The error message that should be logged.
 * </p>
 * @param int $message_type [optional] <p>
 * Says where the error should go. The possible message types are as 
 * follows:
 * </p>
 * <p>
 * <table>
 * error_log log types
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * message is sent to PHP's system logger, using
 * the Operating System's system logging mechanism or a file, depending
 * on what the error_log
 * configuration directive is set to. This is the default option.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>
 * message is sent by email to the address in
 * the destination parameter. This is the only
 * message type where the fourth parameter,
 * extra_headers is used.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>
 * No longer an option.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>
 * message is appended to the file
 * destination. A newline is not automatically 
 * added to the end of the message string.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>4</td>
 * <td>
 * message is sent directly to the SAPI logging
 * handler.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $destination [optional] <p>
 * The destination. Its meaning depends on the 
 * message_type parameter as described above.
 * </p>
 * @param string $extra_headers [optional] <p>
 * The extra headers. It's used when the message_type
 * parameter is set to 1.
 * This message type uses the same internal function as 
 * mail does.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function error_log ($message, $message_type = null, $destination = null, $extra_headers = null) {}
?>
