<?php

// Start of SPL v.0.2


/**
 * (PHP 5)<br/>
 * Return available SPL classes
 * @link http://php.net/manual/en/function.spl-classes.php
 * @return array 
 */
function spl_classes () {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Default implementation for __autoload()
 * @link http://php.net/manual/en/function.spl-autoload.php
 * @param string $class_name <p>
 * </p>
 * @param string $file_extensions [optional] <p>
 * By default it checks all include paths to
 * contain filenames built up by the lowercase class name appended by the
 * filename extensions .inc and .php. 
 * </p>
 * @return void
 */
function spl_autoload ($class_name, $file_extensions = null) {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Register and return default file extensions for spl_autoload
 * @link http://php.net/manual/en/function.spl-autoload-extensions.php
 * @param string $file_extensions [optional] <p>
 * When calling without an argument, it simply returns the current list
 * of extensions each separated by comma. To modify the list of file
 * extensions, simply invoke the functions with the new list of file
 * extensions to use in a single string with each extensions separated
 * by comma.
 * </p>
 * @return string A comma delimited list of default file extensions for
 * spl_autoload.
 */
function spl_autoload_extensions ($file_extensions = null) {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Register given function as __autoload() implementation
 * @link http://php.net/manual/en/function.spl-autoload-register.php
 * @param callback $autoload_function [optional] <p>
 * The autoload function being registered.
 * If no parameter is provided, then the default implementation of
 * spl_autoload will be registered. 
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function spl_autoload_register ($autoload_function = null) {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Unregister given function as __autoload() implementation
 * @link http://php.net/manual/en/function.spl-autoload-unregister.php
 * @param mixed $autoload_function <p>
 * The autoload function being unregistered.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function spl_autoload_unregister ($autoload_function) {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Return all registered __autoload() functions
 * @link http://php.net/manual/en/function.spl-autoload-functions.php
 * @return array An array of all registered __autoload functions.
 * If the autoload stack is not activated then the return value is false.
 * If no function is registered the return value will be an empty array.
 */
function spl_autoload_functions () {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Try all registered __autoload() function to load the requested class
 * @link http://php.net/manual/en/function.spl-autoload-call.php
 * @param string $class_name <p>
 * The class name being searched.
 * </p>
 * @return void
 */
function spl_autoload_call ($class_name) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Return the parent classes of the given class
 * @link http://php.net/manual/en/function.class-parents.php
 * @param mixed $class <p>
 * An object (class instance) or a string (class name).
 * </p>
 * @param bool $autoload [optional] <p>
 * Whether to allow this function to load the class automatically through
 * the __autoload magic
 * method.
 * </p>
 * @return array An array on success, or false on error.
 */
function class_parents ($class, $autoload = null) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Return the interfaces which are implemented by the given class
 * @link http://php.net/manual/en/function.class-implements.php
 * @param mixed $class <p>
 * An object (class instance) or a string (class name).
 * </p>
 * @param bool $autoload [optional] <p>
 * Whether to allow this function to load the class automatically through
 * the __autoload magic
 * method.
 * </p>
 * @return array An array on success, or false on error.
 */
function class_implements ($class, $autoload = null) {}

/**
 * (PHP 5 &gt;= 5.2.0)<br/>
 * Return hash id for given object
 * @link http://php.net/manual/en/function.spl-object-hash.php
 * @param object $obj 
 * @return string A string that is unique for each object and is always the same for
 * the same object.
 */
function spl_object_hash ($obj) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Copy the iterator into an array
 * @link http://php.net/manual/en/function.iterator-to-array.php
 * @param Traversable $iterator <p>
 * The iterator being copied.
 * </p>
 * @param bool $use_keys [optional] <p>
 * Whether to use the iterator element keys as index.
 * </p>
 * @return array An array containing the elements of the iterator.
 */
function iterator_to_array ($iterator, $use_keys = null) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Count the elements in an iterator
 * @link http://php.net/manual/en/function.iterator-count.php
 * @param Traversable $iterator <p>
 * The iterator being counted.
 * </p>
 * @return int The number of elements in iterator.
 */
function iterator_count ($iterator) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Call a function for every element in an iterator
 * @link http://php.net/manual/en/function.iterator-apply.php
 * @param Traversable $iterator <p>
 * The class to iterate over.
 * </p>
 * @param callback $function <p>
 * The callback function to call on every element.
 * The function must return true in order to
 * continue iterating over the iterator.
 * </p>
 * @param array $args [optional] <p>
 * Arguments to pass to the callback function.
 * </p>
 * @return int the iteration count.
 */
function iterator_apply ($iterator, $function, array $args = null) {}

// End of SPL v.0.2
?>
