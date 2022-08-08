<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_javaunittest', language 'en', version '4.0'.
 *
 * @package     qtype_javaunittest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CA'] = 'CORRECT ANSWER: All answers are correct.';
$string['CE'] = 'COMPILER ERROR: Your source code does not compile. Please check it for errors.';
$string['JE'] = 'JUNIT TEST FILE ERROR: Test cannot be executed. The given answer seems to be incompatible to the test class or the test class could not be compiled. (Your code was compiled successfully but does not match with the test code. Please check again all members and methods with its identifiers and data types.)';
$string['PCA'] = 'PARTIALLY CORRECT ANSWER: Some answers are correct, some not.';
$string['RSE'] = 'REMOTE SERVER ERROR: The remote server is not reachable or does not work.';
$string['SSM'] = 'SIGNATURE MISSMATCH: Test cannot be executed. Given code does not match the expectations. Please check again all members and methodes with its identifiers and data types.';
$string['TO'] = 'TIMEOUT: The execution time limit is reached.';
$string['WA'] = 'WRONG ANSWER: All answers are wrong.';
$string['accesscontrolexception'] = 'AccessControlException occurred.';
$string['apperance_heading'] = 'Appearance';
$string['arrayindexoutofboundexception'] = 'ArrayIndexOutOfBoundException occurred.';
$string['assertfailures_actual'] = 'Actual value:';
$string['assertfailures_expected'] = 'Expected value:';
$string['assertfailures_string'] = 'Error description:';
$string['bufferoverflowexception'] = 'BufferOverflowException occurred.';
$string['bufferunderflowexception'] = 'BufferUnderflowError occurred.';
$string['classcastexception'] = 'ClassCastException occurred.';
$string['compiling'] = 'compiling... [{$a}s]';
$string['crontask'] = 'Unittest feedback cleanup';
$string['debug_heading'] = 'Local debug information';
$string['debug_heading_desc'] = 'Enable only for testing! (only local java execution)';
$string['debug_logfile'] = 'Save logfiles to temporary directory';
$string['debug_nocleanup'] = 'Do not clean up temporary files and directories';
$string['editor'] = 'Code input fields';
$string['editor_desc'] = 'Defines appearance of the code input fields.<br>CodeMirror: Uses the <a href="http://codemirror.net/">CodeMirror Editor</a>, when javascript is activated.<br>EnableTab Textarea: Uses a common text area, where tabs can be used to indent, when javascript is activated.<br>Simple Textarea: Uses a common text area without any features.';
$string['feedbacklevel_assertactual'] = 'In assert failure case show actual value (default 0))';
$string['feedbacklevel_assertactual_help'] = 'In assert failure case show actual value. <br>Example: <tt>assertEquals("method MyMath.add() is wrong", "2", Integer.toString(MyMath.add(1,1))</tt><br>Adds to feedback: <i>method MyMath.add() is wrong</i>, Actual value <i>-17</i><br>Combinable with show assert expected value<br><br>Can lead students to implementat methods only to fit test cases.<br>Can be abused to show system information or test information about this variable in case of a matching policy settings.';
$string['feedbacklevel_assertexpected'] = 'In assert failure case show expected value (default 0)';
$string['feedbacklevel_assertexpected_help'] = 'In assert failure case show expected value. <br>Example: <tt>assertEquals("method MyMath.add() is wrong", "2", Integer.toString(MyMath.add(1,1))</tt><br>Adds to feedback: <i>method MyMath.add() is wrong</i>, Expected value <i>2</i><br>Combinable with show assert actual value<br>Can lead to test specific implementations from students.';
$string['feedbacklevel_assertheader'] = 'Assert methods';
$string['feedbacklevel_assertstring'] = 'In assert failure case show assert feedback string';
$string['feedbacklevel_assertstring_help'] = 'In assert failure case show assert feedback string. <br>Example: <tt>assertEquals("method MyMath.add() is wrong", "2", Integer.toString(MyMath.add(1,1))</tt><br>Adds to feedback: <i>method MyMath.add() is wrong</i>';
$string['feedbacklevel_compilerheader'] = 'Compiler feedback';
$string['feedbacklevel_completeheader'] = 'JUnit';
$string['feedbacklevel_counttests'] = 'Show number of tests, failures and errors';
$string['feedbacklevel_counttests_help'] = 'Show number of tests, failures and errors that is returned by Junit';
$string['feedbacklevel_junitcompiler'] = 'Show compiler errors for junit code (default 0, see (?) button and documentation)';
$string['feedbacklevel_junitcompiler_help'] = 'Show compiler errors, when the JUnit test code does not compile.<br>There are mainly two reasons:<br>- The JUnit code has bugs and needs to be fixed by the question creator.<br>- The JUnit code expects certain interface to student code (e.g. calling an expected method in student code), which is actually not available. There are different possibilties to handle that:<br>&nbsp;&nbsp;&nbsp;&nbsp;a) Only use reflections to access student\\\'s code (needs certain rights in policy of the security manager)<br>&nbsp;&nbsp;&nbsp;&nbsp;b) add the JUnit compiler error to feedback by activating these checkbox (student has to unterstand these error message to solve the problem; sees parts of the test class as a side effect)<br>&nbsp;&nbsp;&nbsp;&nbsp;c) Adding the expected signature of the student code to the question in the optional section Solution. Correct structure of student code is checked between compiling of student code and test code.';
$string['feedbacklevel_junitcomplete'] = 'Show whole junit output (default 0))';
$string['feedbacklevel_junitcomplete_help'] = 'Show whole junit output <br>Useful for debugging, not recommended for production usage, because students would deal with irrelevant or system specific information.';
$string['feedbacklevel_junitheader'] = 'Show JUnit header (default 0)';
$string['feedbacklevel_junitheader_help'] = 'Shows JUnit header (version and tests, failures and errors, nearly the same as the previous option)';
$string['feedbacklevel_studentcompiler'] = 'Show compiler errors for student code';
$string['feedbacklevel_studentcompiler_help'] = 'Show compiler errors for student code, if it does not compile';
$string['feedbacklevel_studentsignature'] = 'Show signature differences';
$string['feedbacklevel_studentsignature_help'] = 'Show the concrete signature differences, if an expected signature was deposited and does not match with the signature of the student\'s code.';
$string['feedbacklevel_testnumheader'] = 'Test summary';
$string['feedbacklevel_times'] = 'Show roundtrip time for computation';
$string['feedbacklevel_times_help'] = 'Show roundtrip time for compiling, verificating, executing and processing';
$string['feedbacklevelheader'] = 'Feedback';
$string['filenotfoundexception'] = 'FileNotFoundException occurred.';
$string['givencode'] = 'Given code';
$string['givencode_help'] = 'Given code to be completed by student. Code is shown in a text area. Refreshing the test sets the code back to given code.<br>Only one <tt>public</tt> class is allowed to exist, no limit for not public classes.';
$string['hiddenfails'] = '{$a} other tests failed.';
$string['ioexception'] = 'IOException occurred.';
$string['limit_heading'] = 'Resource limits';
$string['local_execution_desc'] = 'If you want compiling and test running on this server you need to set the following.';
$string['local_execution_heading'] = 'Execution on this server';
$string['memory_limit_output'] = 'Memory limit (output) in KB';
$string['memory_limit_output_desc'] = 'Limits the size of outputs during test executions.';
$string['memory_xmx'] = 'Memory limit (heap) in MB';
$string['memory_xmx_desc'] = 'This sets the option -Xmx for the Java VM. Specifies the maximum size of the memory allocation pool.';
$string['missing_classes_headline'] = 'Missing classes:';
$string['missing_classes_text1'] = 'The expected class <tt>{$a}</tt>';
$string['missing_classes_text2'] = '(<tt>{$a}</tt>) is missing.';
$string['missing_members_headline'] = 'Missing class members:';
$string['missing_members_text1'] = 'In class <tt>{$a}</tt>';
$string['missing_members_text2'] = 'the member <tt>{$a}</tt> is missing.';
$string['missing_methods_headline'] = 'Missing methods:';
$string['missing_methods_text1'] = 'In class <tt>{$a}</tt>';
$string['missing_methods_text2'] = 'the method <tt>{$a}</tt> is missing.';
$string['negativearraysizeexception'] = 'NegativeArraySizeException occurred.';
$string['nlines'] = '{$a} lines';
$string['nullpointerexception'] = 'NullPointerException occurred.';
$string['outofmemoryerror'] = 'OutOfMemoryError occurred.';
$string['pathhamcrest'] = 'Path of hamcrest jar';
$string['pathjava'] = 'Path of java binary';
$string['pathjavac'] = 'Path of javac binary';
$string['pathjavap'] = 'Path of javap';
$string['pathjunit'] = 'Path of junit jar';
$string['pathpolicy'] = 'Path of the policy file for the Java Security Manager';
$string['pluginname'] = 'javaunittest';
$string['pluginname_help'] = 'JUnit question type';
$string['pluginname_link'] = 'question/type/javaunittest';
$string['pluginnameadding'] = 'Adding a javaunittest question';
$string['pluginnameediting'] = 'Editing a javaunittest question';
$string['pluginnamesummary'] = 'Allows to evaluate java code responses by a self written JUnit test';
$string['precommand'] = 'Command before test execution';
$string['precommand_desc'] = 'This will be executed on shell before the tests. You may use ulimit to limit resources (e.g. cpu time) for the tests.';
$string['remote_execution_heading'] = 'Execution on other server';
$string['remoteserver'] = 'Remote URL';
$string['remoteserver_desc'] = 'Give a URL to a remote machine if you want remote compiling and test running. Otherwise leave this empty if you wish execution on this server. The remote server may override the settings for memory and time limit. (e.g. http://remoteserver/moodle_qtype_javaunittest/server.php)';
$string['remoteserver_password'] = 'Password';
$string['remoteserver_user'] = 'Username';
$string['responsefieldlines'] = 'Input box size for code textareas';
$string['running'] = 'running... [{$a}s]';
$string['signature'] = 'Expected signature (optional)';
$string['signature_help'] = 'Expected signature of student code can be placed here.<br>When student code was compiled, the compilation will be evaluated to this signature. Signature of compilation has to contain this expected signature. When elements are missing, then the validation will be ended and 0 points are given.<br>Useful to avoid that the junit test code does not compile, because the interface is not matching. (e.g. student has different attribute, method names or types as by the exercise asked). Use reflections as an other way or accept the possibility of not compiling test class.<br>Uses <tt>javap -p -constants Studentfile.class</tt>.<br>Order of classes and methods is not important.<br>Does <b>not</b> delete additional whitespaces. Signature has to be fit the <tt>javap</tt> output format.<br><br>Example signature:<tt><br>class Factorial {<br>&nbsp;&nbsp;&nbsp;&nbsp;public static double factorial(int);<br>}<br></tt><br>(You can compile your sample solution local, run the <tt>javap -p -constants Studentfile.class</tt>, copy the output here. (Planned feature to add a button doing exactly this.))';
$string['solution'] = 'Sample solution (optional)';
$string['solution_help'] = 'Sample solution can be placed here.<br>Sample solution can be loaded in quiz preview with button, to verify sample code to test class.<br>Sample solution can be shown to student after finishing the exercise, with matching quiz settings.';
$string['solutionannounce'] = 'Sample solution';
$string['solutionheader'] = 'Sample solution';
$string['stackoverflowerror'] = 'StackOverflowError occurred.';
$string['stringindexoutofboundexception'] = 'StringIndexOutOfBoundException occurred.';
$string['testclassname'] = 'JUnit test class name';
$string['testclassname_help'] = 'The JUnit class name of the following JUnit test code. The JUnit class name must be the same as the class name in the following "JUnit test code" section.';
$string['timeout_real'] = 'Timeout';
$string['timeout_real_desc'] = 'Timeout in seconds (real time) for test executions.';
$string['uploadtestclass'] = 'JUnit test class';
$string['uploadtestclass_help'] = 'The JUnit test class evaluates the student code.<br>Information and examples to JUnit in the javaunittest documentation and at <a href="http://junit.org/">http://junit.org</a>';
