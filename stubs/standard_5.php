<?php


/**
 * (PHP 4, PHP 5)<br/>
 * Get the integer value of a variable
 * @link http://php.net/manual/en/function.intval.php
 * @param mixed $var <p>
 * The scalar value being converted to an integer
 * </p>
 * @param int $base [optional] <p>
 * The base for the conversion
 * </p>
 * @return int The integer value of var on success, or 0 on
 * failure. Empty arrays and objects return 0, non-empty arrays and
 * objects return 1.
 * </p>
 * <p>
 * The maximum value depends on the system. 32 bit systems have a 
 * maximum signed integer range of -2147483648 to 2147483647. So for example 
 * on such a system, intval('1000000000000') will return 
 * 2147483647. The maximum signed integer value for 64 bit systems is 
 * 9223372036854775807.
 * </p>
 * <p>
 * Strings will most likely return 0 although this depends on the 
 * leftmost characters of the string. The common rules of 
 * integer casting 
 * apply.
 */
function intval ($var, $base = null) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5)<br/>
 * Get float value of a variable
 * @link http://php.net/manual/en/function.floatval.php
 * @param mixed $var <p>
 * May be any scalar type. You cannot use floatval 
 * on arrays or objects.
 * </p>
 * @return float The float value of the given variable.
 */
function floatval ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * &Alias; <function>floatval</function>
 * @link http://php.net/manual/en/function.doubleval.php
 * @param $var
 */
function doubleval ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Get string value of a variable
 * @link http://php.net/manual/en/function.strval.php
 * @param mixed $var <p>
 * The variable that is being converted to a string.
 * </p>
 * <p>
 * var may be any scalar type. You cannot use
 * strval on arrays or objects.
 * </p>
 * @return string The string value of var.
 */
function strval ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Get the type of a variable
 * @link http://php.net/manual/en/function.gettype.php
 * @param mixed $var <p>
 * The variable being type checked.
 * </p>
 * @return string Possibles values for the returned string are:
 * "boolean"
 * "integer"
 * "double" (for historical reasons "double" is
 * returned in case of a float, and not simply
 * "float")
 * "string"
 * "array"
 * "object"
 * "resource"
 * "NULL"
 * "unknown type"
 */
function gettype ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Set the type of a variable
 * @link http://php.net/manual/en/function.settype.php
 * @param mixed $var <p>
 * The variable being converted.
 * </p>
 * @param string $type <p>
 * Possibles values of type are:
 * "boolean" (or, since PHP 4.2.0, "bool")
 * @return bool Returns true on success or false on failure.
 */
function settype (&$var, $type) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5)<br/>
 * Finds whether a variable is &null;
 * @link http://php.net/manual/en/function.is-null.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is null, false
 * otherwise.
 */
function is_null ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Finds whether a variable is a resource
 * @link http://php.net/manual/en/function.is-resource.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is a resource,
 * false otherwise.
 */
function is_resource ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Finds out whether a variable is a boolean
 * @link http://php.net/manual/en/function.is-bool.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is a boolean,
 * false otherwise.
 */
function is_bool ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * &Alias; <function>is_int</function>
 * @link http://php.net/manual/en/function.is-long.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is an integer,
 * false otherwise.
 */
function is_long ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Finds whether the type of a variable is float
 * @link http://php.net/manual/en/function.is-float.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is a float, 
 * false otherwise.
 */
function is_float ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Find whether the type of a variable is integer
 * @link http://php.net/manual/en/function.is-int.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is an integer, 
 * false otherwise.
 */
function is_int ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * &Alias; <function>is_int</function>
 * @link http://php.net/manual/en/function.is-integer.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is an integer,
 * false otherwise.
 */
function is_integer ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * &Alias; <function>is_float</function>
 * @link http://php.net/manual/en/function.is-double.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is a float,
 * false otherwise.
 */
function is_double ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * &Alias; <function>is_float</function>
 * @link http://php.net/manual/en/function.is-real.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is a float,
 * false otherwise.
 */
function is_real ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Finds whether a variable is a number or a numeric string
 * @link http://php.net/manual/en/function.is-numeric.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is a number or a numeric
 * string, false otherwise.
 */
function is_numeric ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Find whether the type of a variable is string
 * @link http://php.net/manual/en/function.is-string.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is of type string,
 * false otherwise.
 */
function is_string ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Finds whether a variable is an array
 * @link http://php.net/manual/en/function.is-array.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is an array, 
 * false otherwise.
 */
function is_array ($var) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Finds whether a variable is an object
 * @link http://php.net/manual/en/function.is-object.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is an object, 
 * false otherwise.
 */
function is_object ($var) {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5)<br/>
 * Finds whether a variable is a scalar
 * @link http://php.net/manual/en/function.is-scalar.php
 * @param mixed $var <p>
 * The variable being evaluated.
 * </p>
 * @return bool true if var is a scalar false
 * otherwise.
 */
function is_scalar ($var) {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5)<br/>
 * Verify that the contents of a variable can be called as a function
 * @link http://php.net/manual/en/function.is-callable.php
 * @param callback $name <p>
 * Can be either the name of a function stored in a string variable, or
 * an object and the name of a method within the object, like this: 
 * array($SomeObject, 'MethodName')
 * </p>
 * @param bool $syntax_only [optional] <p>
 * If set to true the function only verifies that
 * name might be a function or method. It will only
 * reject simple variables that are not strings, or an array that does
 * not have a valid structure to be used as a callback. The valid ones
 * are supposed to have only 2 entries, the first of which is an object
 * or a string, and the second a string.
 * </p>
 * @param string $callable_name [optional] <p>
 * Receives the "callable name". In the example below it is
 * "someClass::someMethod". Note, however, that despite the implication
 * that someClass::SomeMethod() is a callable static method, this is not
 * the case.
 * </p>
 * @return bool true if name is callable, false 
 * otherwise.
 */
function is_callable ($name, $syntax_only = null, &$callable_name = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Closes process file pointer
 * @link http://php.net/manual/en/function.pclose.php
 * @param resource $handle <p>
 * The file pointer must be valid, and must have been returned by a
 * successful call to popen.
 * </p>
 * @return int the termination status of the process that was run.
 */
function pclose ($handle) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Opens process file pointer
 * @link http://php.net/manual/en/function.popen.php
 * @param string $command <p>
 * The command
 * </p>
 * @param string $mode <p>
 * The mode
 * </p>
 * @return resource a file pointer identical to that returned by
 * fopen, except that it is unidirectional (may
 * only be used for reading or writing) and must be closed with
 * pclose. This pointer may be used with
 * fgets, fgetss, and
 * fwrite.
 * </p>
 * <p>
 * If an error occurs, returns false.
 */
function popen ($command, $mode) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Outputs a file
 * @link http://php.net/manual/en/function.readfile.php
 * @param string $filename <p>
 * The filename being read.
 * </p>
 * @param bool $use_include_path [optional] <p>
 * You can use the optional second parameter and set it to true, if
 * you want to search for the file in the include_path, too.
 * </p>
 * @param resource $context [optional] <p>
 * A context stream resource.
 * </p>
 * @return int the number of bytes read from the file. If an error
 * occurs, false is returned and unless the function was called as
 * @readfile, an error message is printed.
 */
function readfile ($filename, $use_include_path = null, $context = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Rewind the position of a file pointer
 * @link http://php.net/manual/en/function.rewind.php
 * @param resource $handle <p>
 * The file pointer must be valid, and must point to a file
 * successfully opened by fopen.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function rewind ($handle) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Removes directory
 * @link http://php.net/manual/en/function.rmdir.php
 * @param string $dirname <p>
 * Path to the directory.
 * </p>
 * @param resource $context [optional] &note.context-support;
 * @return bool Returns true on success or false on failure.
 */
function rmdir ($dirname, $context = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Changes the current umask
 * @link http://php.net/manual/en/function.umask.php
 * @param int $mask [optional] <p>
 * The new umask.
 * </p>
 * @return int umask without arguments simply returns the
 * current umask otherwise the old umask is returned.
 */
function umask ($mask = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Closes an open file pointer
 * @link http://php.net/manual/en/function.fclose.php
 * @param resource $handle <p>
 * The file pointer must be valid, and must point to a file successfully
 * opened by fopen or fsockopen.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function fclose ($handle) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Tests for end-of-file on a file pointer
 * @link http://php.net/manual/en/function.feof.php
 * @param resource $handle &fs.validfp.all;
 * @return bool true if the file pointer is at EOF or an error occurs
 * (including socket timeout); otherwise returns false.
 */
function feof ($handle) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets character from file pointer
 * @link http://php.net/manual/en/function.fgetc.php
 * @param resource $handle &fs.validfp.all;
 * @return string a string containing a single character read from the file pointed
 * to by handle. Returns false on EOF.
 */
function fgetc ($handle) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets line from file pointer
 * @link http://php.net/manual/en/function.fgets.php
 * @param resource $handle &fs.validfp.all;
 * @param int $length [optional] <p>
 * Reading ends when length - 1 bytes have been
 * read, on a newline (which is included in the return value), or on EOF
 * (whichever comes first). If no length is specified, it will keep
 * reading from the stream until it reaches the end of the line.
 * </p>
 * <p>
 * Until PHP 4.3.0, omitting it would assume 1024 as the line length.
 * If the majority of the lines in the file are all larger than 8KB,
 * it is more resource efficient for your script to specify the maximum
 * line length.
 * </p>
 * @return string a string of up to length - 1 bytes read from
 * the file pointed to by handle.
 * </p>
 * <p>
 * If an error occurs, returns false.
 */
function fgets ($handle, $length = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets line from file pointer and strip HTML tags
 * @link http://php.net/manual/en/function.fgetss.php
 * @param resource $handle &fs.validfp.all;
 * @param int $length [optional] <p>
 * Length of the data to be retrieved.
 * </p>
 * @param string $allowable_tags [optional] <p>
 * You can use the optional third parameter to specify tags which should
 * not be stripped.
 * </p>
 * @return string a string of up to length - 1 bytes read from
 * the file pointed to by handle, with all HTML and PHP
 * code stripped.
 * </p>
 * <p>
 * If an error occurs, returns false.
 */
function fgetss ($handle, $length = null, $allowable_tags = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Binary-safe file read
 * @link http://php.net/manual/en/function.fread.php
 * @param resource $handle &fs.file.pointer;
 * @param int $length <p>
 * Up to length number of bytes read.
 * </p>
 * @return string the read string &return.falseforfailure;.
 */
function fread ($handle, $length) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Opens file or URL
 * @link http://php.net/manual/en/function.fopen.php
 * @param string $filename <p>
 * If filename is of the form "scheme://...", it
 * is assumed to be a URL and PHP will search for a protocol handler
 * (also known as a wrapper) for that scheme. If no wrappers for that
 * protocol are registered, PHP will emit a notice to help you track
 * potential problems in your script and then continue as though
 * filename specifies a regular file.
 * </p>
 * <p>
 * If PHP has decided that filename specifies
 * a local file, then it will try to open a stream on that file.
 * The file must be accessible to PHP, so you need to ensure that
 * the file access permissions allow this access.
 * If you have enabled &safemode;,
 * or open_basedir further
 * restrictions may apply.
 * </p>
 * <p>
 * If PHP has decided that filename specifies
 * a registered protocol, and that protocol is registered as a
 * network URL, PHP will check to make sure that
 * allow_url_fopen is
 * enabled. If it is switched off, PHP will emit a warning and
 * the fopen call will fail.
 * </p>
 * <p>
 * The list of supported protocols can be found in . Some protocols (also referred to as
 * wrappers) support context
 * and/or &php.ini; options. Refer to the specific page for the
 * protocol in use for a list of options which can be set. (e.g.
 * &php.ini; value user_agent used by the
 * http wrapper).
 * </p>
 * <p>
 * On the Windows platform, be careful to escape any backslashes
 * used in the path to the file, or use forward slashes.
 * ]]>
 * </p>
 * @param string $mode <p>
 * The mode parameter specifies the type of access
 * you require to the stream. It may be any of the following:
 * <table>
 * A list of possible modes for fopen
 * using mode
 * <tr valign="top">
 * <td>mode</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>'r'</td>
 * <td>
 * Open for reading only; place the file pointer at the
 * beginning of the file.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'r+'</td>
 * <td>
 * Open for reading and writing; place the file pointer at
 * the beginning of the file.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'w'</td>
 * <td>
 * Open for writing only; place the file pointer at the
 * beginning of the file and truncate the file to zero length.
 * If the file does not exist, attempt to create it.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'w+'</td>
 * <td>
 * Open for reading and writing; place the file pointer at
 * the beginning of the file and truncate the file to zero
 * length. If the file does not exist, attempt to create it.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'a'</td>
 * <td>
 * Open for writing only; place the file pointer at the end of
 * the file. If the file does not exist, attempt to create it.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'a+'</td>
 * <td>
 * Open for reading and writing; place the file pointer at
 * the end of the file. If the file does not exist, attempt to
 * create it.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'x'</td>
 * <td>
 * Create and open for writing only; place the file pointer at the
 * beginning of the file. If the file already exists, the
 * fopen call will fail by returning false and
 * generating an error of level E_WARNING. If
 * the file does not exist, attempt to create it. This is equivalent
 * to specifying O_EXCL|O_CREAT flags for the
 * underlying open(2) system call. 
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'x+'</td>
 * <td>
 * Create and open for reading and writing; place the file pointer at
 * the beginning of the file. If the file already exists, the
 * fopen call will fail by returning false and
 * generating an error of level E_WARNING. If
 * the file does not exist, attempt to create it. This is equivalent
 * to specifying O_EXCL|O_CREAT flags for the
 * underlying open(2) system call.
 * </td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * Different operating system families have different line-ending
 * conventions. When you write a text file and want to insert a line
 * break, you need to use the correct line-ending character(s) for your
 * operating system. Unix based systems use \n as the
 * line ending character, Windows based systems use \r\n
 * as the line ending characters and Macintosh based systems use
 * \r as the line ending character.
 * </p>
 * <p>
 * If you use the wrong line ending characters when writing your files, you
 * might find that other applications that open those files will "look
 * funny".
 * </p>
 * <p>
 * Windows offers a text-mode translation flag ('t')
 * which will transparently translate \n to
 * \r\n when working with the file. In contrast, you
 * can also use 'b' to force binary mode, which will not
 * translate your data. To use these flags, specify either
 * 'b' or 't' as the last character
 * of the mode parameter.
 * </p>
 * <p>
 * The default translation mode depends on the SAPI and version of PHP that
 * you are using, so you are encouraged to always specify the appropriate
 * flag for portability reasons. You should use the 't'
 * mode if you are working with plain-text files and you use
 * \n to delimit your line endings in your script, but
 * expect your files to be readable with applications such as notepad. You
 * should use the 'b' in all other cases.
 * </p>
 * <p>
 * If you do not specify the 'b' flag when working with binary files, you
 * may experience strange problems with your data, including broken image
 * files and strange problems with \r\n characters.
 * </p>
 * <p>
 * For portability, it is strongly recommended that you always
 * use the 'b' flag when opening files with fopen.
 * </p>
 * <p>
 * Again, for portability, it is also strongly recommended that
 * you re-write code that uses or relies upon the 't'
 * mode so that it uses the correct line endings and
 * 'b' mode instead.
 * </p>
 * @param bool $use_include_path [optional] <p>
 * The optional third use_include_path parameter
 * can be set to '1' or true if you want to search for the file in the
 * include_path, too.
 * </p>
 * @param resource $context [optional] &note.context-support;
 * @return resource a file pointer resource on success, or false on error.
 */
function fopen ($filename, $mode, $use_include_path = null, $context = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Output all remaining data on a file pointer
 * @link http://php.net/manual/en/function.fpassthru.php
 * @param resource $handle &fs.validfp.all;
 * @return int If an error occurs, fpassthru returns
 * false. Otherwise, fpassthru returns
 * the number of characters read from handle
 * and passed through to the output.
 */
function fpassthru ($handle) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Truncates a file to a given length
 * @link http://php.net/manual/en/function.ftruncate.php
 * @param resource $handle <p>
 * The file pointer.
 * </p>
 * <p>
 * The handle must be open for writing.
 * </p>
 * @param int $size <p>
 * The size to truncate to.
 * </p>
 * <p>
 * If size is larger than the file it is extended
 * with null bytes.
 * </p>
 * <p>
 * If size is smaller than the extra data
 * will be lost.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function ftruncate ($handle, $size) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets information about a file using an open file pointer
 * @link http://php.net/manual/en/function.fstat.php
 * @param resource $handle &fs.file.pointer;
 * @return array an array with the statistics of the file; the format of the array
 * is described in detail on the stat manual page.
 */
function fstat ($handle) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Seeks on a file pointer
 * @link http://php.net/manual/en/function.fseek.php
 * @param resource $handle &fs.file.pointer;
 * @param int $offset <p>
 * The offset.
 * </p>
 * <p>
 * To move to a position before the end-of-file, you need to pass
 * a negative value in offset and
 * set whence
 * to SEEK_END.
 * </p>
 * @param int $whence [optional] <p>
 * whence values are:
 * SEEK_SET - Set position equal to offset bytes.
 * SEEK_CUR - Set position to current location plus offset.
 * SEEK_END - Set position to end-of-file plus offset.
 * </p>
 * <p>
 * If whence is not specified, it is assumed to be
 * SEEK_SET.
 * </p>
 * @return int Upon success, returns 0; otherwise, returns -1. Note that seeking
 * past EOF is not considered an error.
 */
function fseek ($handle, $offset, $whence = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Returns the current position of the file read/write pointer
 * @link http://php.net/manual/en/function.ftell.php
 * @param resource $handle <p>
 * The file pointer must be valid, and must point to a file successfully
 * opened by fopen or popen.
 * ftell gives undefined results for append-only streams
 * (opened with "a" flag).
 * </p>
 * @return int the position of the file pointer referenced by
 * handle as an integer; i.e., its offset into the file stream.
 * </p>
 * <p>
 * If an error occurs, returns false.
 */
function ftell ($handle) {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5)<br/>
 * Flushes the output to a file
 * @link http://php.net/manual/en/function.fflush.php
 * @param resource $handle &fs.validfp.all;
 * @return bool Returns true on success or false on failure.
 */
function fflush ($handle) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Binary-safe file write
 * @link http://php.net/manual/en/function.fwrite.php
 * @param resource $handle &fs.file.pointer;
 * @param string $string <p>
 * The string that is to be written.
 * </p>
 * @param int $length [optional] <p>
 * If the length argument is given, writing will
 * stop after length bytes have been written or
 * the end of string is reached, whichever comes
 * first.
 * </p>
 * <p>
 * Note that if the length argument is given,
 * then the magic_quotes_runtime
 * configuration option will be ignored and no slashes will be
 * stripped from string.
 * </p>
 * @return int 
 */
function fwrite ($handle, $string, $length = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * &Alias; <function>fwrite</function>
 * @link http://php.net/manual/en/function.fputs.php
 * @param $fp
 * @param $str
 * @param $length [optional]
 */
function fputs ($fp, $str, $length) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Makes directory
 * @link http://php.net/manual/en/function.mkdir.php
 * @param string $pathname <p>
 * The directory path.
 * </p>
 * @param int $mode [optional] <p>
 * The mode is 0777 by default, which means the widest possible
 * access. For more information on modes, read the details
 * on the chmod page.
 * </p>
 * <p>
 * mode is ignored on Windows.
 * </p>
 * <p>
 * Note that you probably want to specify the mode as an octal number,
 * which means it should have a leading zero. The mode is also modified
 * by the current umask, which you can change using
 * umask.
 * </p>
 * @param bool $recursive [optional] <p>
 * Default to false.
 * </p>
 * @param resource $context [optional] &note.context-support;
 * @return bool Returns true on success or false on failure.
 */
function mkdir ($pathname, $mode = null, $recursive = null, $context = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Renames a file or directory
 * @link http://php.net/manual/en/function.rename.php
 * @param string $oldname <p>
 * </p>
 * <p>
 * The old name. The wrapper used in oldname
 * must match the wrapper used in
 * newname.
 * </p>
 * @param string $newname <p>
 * The new name.
 * </p>
 * @param resource $context [optional] &note.context-support;
 * @return bool Returns true on success or false on failure.
 */
function rename ($oldname, $newname, $context = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Copies file
 * @link http://php.net/manual/en/function.copy.php
 * @param string $source <p>
 * Path to the source file.
 * </p>
 * @param string $dest <p>
 * The destination path. If dest is a URL, the
 * copy operation may fail if the wrapper does not support overwriting of
 * existing files.
 * </p>
 * <p>
 * If the destination file already exists, it will be overwritten.
 * </p>
 * @param resource $context [optional] <p>
 * A valid context resource created with 
 * stream_context_create.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function copy ($source, $dest, $context = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Create file with unique file name
 * @link http://php.net/manual/en/function.tempnam.php
 * @param string $dir <p>
 * The directory where the temporary filename will be created.
 * </p>
 * @param string $prefix <p>
 * The prefix of the generated temporary filename.
 * </p>
 * Windows use only the first three characters of prefix.
 * @return string the new temporary filename, or false on
 * failure.
 */
function tempnam ($dir, $prefix) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Creates a temporary file
 * @link http://php.net/manual/en/function.tmpfile.php
 * @return resource a file handle, similar to the one returned by
 * fopen, for the new file&return.falseforfailure;.
 */
function tmpfile () {}

/**
 * (PHP 4, PHP 5)<br/>
 * Reads entire file into an array
 * @link http://php.net/manual/en/function.file.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * &tip.fopen-wrapper;
 * @param int $flags [optional] <p>
 * The optional parameter flags can be one, or
 * more, of the following constants:
 * FILE_USE_INCLUDE_PATH
 * Search for the file in the include_path.
 * @param resource $context [optional] <p>
 * A context resource created with the 
 * stream_context_create function.
 * </p>
 * <p>
 * &note.context-support;
 * </p>
 * @return array the file in an array. Each element of the array corresponds to a
 * line in the file, with the newline still attached. Upon failure,
 * file returns false.
 * </p>
 * <p>
 * Each line in the resulting array will include the line ending, unless
 * FILE_IGNORE_NEW_LINES is used, so you still need to
 * use rtrim if you do not want the line ending
 * present.
 */
function file ($filename, $flags = null, $context = null) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5)<br/>
 * Reads entire file into a string
 * @link http://php.net/manual/en/function.file-get-contents.php
 * @param string $filename <p>
 * Name of the file to read.
 * </p>
 * @param int $flags [optional] <p>
 * Prior to PHP 6, this parameter is called
 * use_include_path and is a bool.
 * As of PHP 5 the FILE_USE_INCLUDE_PATH can be used
 * to trigger include path
 * search.
 * </p>
 * <p>
 * The value of flags can be any combination of 
 * the following flags (with some restrictions), joined with the
 * binary OR (|)
 * operator.
 * </p>
 * <p>
 * <table>
 * Available flags
 * <tr valign="top">
 * <td>Flag</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>
 * FILE_USE_INCLUDE_PATH
 * </td>
 * <td>
 * Search for filename in the include directory.
 * See include_path for more
 * information.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>
 * FILE_TEXT
 * </td>
 * <td>
 * As of PHP 6, the default encoding of the read
 * data is UTF-8. You can specify a different encoding by creating a 
 * custom context or by changing the default using 
 * stream_default_encoding. This flag cannot be 
 * used with FILE_BINARY. 
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>
 * FILE_BINARY
 * </td>
 * <td>
 * With this flag, the file is read in binary mode. This is the default
 * setting and cannot be used with FILE_TEXT. 
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param resource $context [optional] <p>
 * A valid context resource created with 
 * stream_context_create. If you don't need to use a
 * custom context, you can skip this parameter by &null;.
 * </p>
 * @param int $offset [optional] <p>
 * The offset where the reading starts.
 * </p>
 * @param int $maxlen [optional] <p>
 * Maximum length of data read. The default is to read until end
 * of file is reached.
 * </p>
 * @return string The function returns the read data&return.falseforfailure;.
 */
function file_get_contents ($filename, $flags = null, $context = null, $offset = null, $maxlen = null) {}

/**
 * (PHP 5)<br/>
 * Write a string to a file
 * @link http://php.net/manual/en/function.file-put-contents.php
 * @param string $filename <p>
 * Path to the file where to write the data.
 * </p>
 * @param mixed $data <p>
 * The data to write. Can be either a string, an
 * array or a stream resource.
 * </p>
 * <p>
 * If data is a stream resource, the
 * remaining buffer of that stream will be copied to the specified file.
 * This is similar with using stream_copy_to_stream.
 * </p>
 * <p>
 * You can also specify the data parameter as a single
 * dimension array. This is equivalent to
 * file_put_contents($filename, implode('', $array)).
 * </p>
 * @param int $flags [optional] <p>
 * The value of flags can be any combination of 
 * the following flags (with some restrictions), joined with the binary OR 
 * (|) operator.
 * </p>
 * <p>
 * <table>
 * Available flags
 * <tr valign="top">
 * <td>Flag</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>
 * FILE_USE_INCLUDE_PATH
 * </td>
 * <td>
 * Search for filename in the include directory.
 * See include_path for more
 * information.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>
 * FILE_APPEND
 * </td>
 * <td>
 * If file filename already exists, append 
 * the data to the file instead of overwriting it. Mutually
 * exclusive with LOCK_EX since appends are atomic and thus there
 * is no reason to lock.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>
 * LOCK_EX
 * </td>
 * <td>
 * Acquire an exclusive lock on the file while proceeding to the 
 * writing. Mutually exclusive with FILE_APPEND.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>
 * FILE_TEXT
 * </td>
 * <td>
 * data is written in text mode. If unicode 
 * semantics are enabled, the default encoding is UTF-8.
 * You can specify a different encoding by creating a custom context
 * or by using the stream_default_encoding to
 * change the default. This flag cannot be used with 
 * FILE_BINARY. This flag is only available since
 * PHP 6.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>
 * FILE_BINARY
 * </td>
 * <td>
 * data will be written in binary mode. This
 * is the default setting and cannot be used with
 * FILE_TEXT. This flag is only available since
 * PHP 6.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param resource $context [optional] <p>
 * A valid context resource created with 
 * stream_context_create.
 * </p>
 * @return int The function returns the number of bytes that were written to the file, or
 * false on failure.
 */
function file_put_contents ($filename, $data, $flags = null, $context = null) {}
?>
