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
 * Strings for component 'tool_inspire', language 'en', version '4.0'.
 *
 * @package     tool_inspire
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Accuracy';
$string['allindicators'] = 'All indicators';
$string['analysablenotused'] = 'Analysable {$a->analysableid} not used: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analysable {$a->analysableid} is not valid for this target: {$a->result}';
$string['analysingsitedata'] = 'Analysing the site';
$string['bettercli'] = 'Models\' evaluation and execution are heavy processes, it is better to run them through command line interface';
$string['cantguessenddate'] = 'Can\'t guess the end date';
$string['cantguessstartdate'] = 'Can\'t guess the start date';
$string['clienablemodel'] = 'You can enable the model by selecting a time splitting method by its id. Note that you can also enable it later using the web interface (\'none\' to exit)';
$string['coursenotyetfinished'] = 'The course is not yet finished';
$string['coursenotyetstarted'] = 'The course is not yet started';
$string['coursetoolong'] = 'Duration is more than 1 year';
$string['disabledmodel'] = 'Sorry, this model has been disabled by the administrator';
$string['editmodel'] = 'Edit model {$a}';
$string['edittrainedwarning'] = 'This model has already been trained, note that changing its indicators or its time splitting method will delete its previous predictions and start generating the new ones';
$string['enabled'] = 'Enabled';
$string['enabledtimesplittings'] = 'Time splitting methods';
$string['enabledtimesplittings_help'] = 'The time splitting method divides the course duration in parts, the predictions engine will run at the end of these parts. It is recommended that you only enable the time splitting methods you could be interested on using; the evaluation process will iterate through all of them so the more time splitting methods to go through the slower the evaluation process will be.';
$string['erroralreadypredict'] = '{$a} file has already been used to predict';
$string['errorcantenablenotimesplitting'] = 'You need to select a time splitting method before enabling the model';
$string['errordisabledmodel'] = '{$a} model is disabled and can not be used to predict';
$string['errorinvalidindicator'] = 'Invalid {$a} indicator';
$string['errorinvalidtimesplitting'] = 'Invalid time splitting, please ensure you added the class fully qualified class name';
$string['errornoenabledandtrainedmodels'] = 'There are not enabled and trained models to predict';
$string['errornoenabledmodels'] = 'There are not enabled models to train';
$string['errornoindicators'] = 'This model does not have any indicator';
$string['errornopredictresults'] = 'No results returned from the predictions processor, check the output directory contents for more info';
$string['errornoroles'] = 'Student or teacher roles have not been defined. Define them in inspire plugin settings page.';
$string['errornorunrecord'] = 'Couldn\'t locate the current run record in the database';
$string['errornotarget'] = 'This model does not have any target';
$string['errornotimesplittings'] = 'This model does not have any time splitting method';
$string['errornottrainedmodel'] = '{$a} model has not been trained yet';
$string['errorpredictionformat'] = 'Wrong prediction calculations format';
$string['errorpredictionnotfound'] = 'Prediction not found';
$string['errorpredictionsprocessor'] = 'Predictions processor error: {$a}';
$string['errorpredictwrongformat'] = 'The predictions processor return can not be decoded: "{$a}"';
$string['errorprocessornotready'] = 'The selected predictions processor is not ready: {$a}';
$string['errorsamplenotavailable'] = 'The predicted sample is not available anymore';
$string['errorunexistingtimesplitting'] = 'The selected time splitting method is not available';
$string['errorunknownaction'] = 'Unknown action';
$string['evaluate'] = 'Evaluate';
$string['evaluatemodel'] = 'Evaluate model';
$string['evaluationinbatches'] = 'The site contents are calculated and stored in batches, during evaluation you can stop the process at any moment, the next time you run it it will continue from the point you stopped it.';
$string['eventactionclicked'] = 'Prediction action clicked';
$string['executemodel'] = 'Execute';
$string['executingmodel'] = 'Training model and calculating predictions';
$string['executionresults'] = 'Results using {$a->name} course duration splitting';
$string['executionresultscli'] = 'Results using {$a->name} (id: {$a->id}) course duration splitting';
$string['extrainfo'] = 'Info';
$string['generalerror'] = 'Evaluation error. Status code {$a}';
$string['goodmodel'] = 'This is a good model and it can be used to predict, enable it and execute it to start getting predictions.';
$string['indicator:accessesafterend'] = 'Accesses after the end date';
$string['indicator:accessesbeforestart'] = 'Accesses before the start date';
$string['indicator:anywrite'] = 'Any write action';
$string['indicator:cognitivedepthassign'] = 'Assignment cognitive';
$string['indicator:cognitivedepthbook'] = 'Book cognitive';
$string['indicator:cognitivedepthchat'] = 'Chat cognitive';
$string['indicator:cognitivedepthchoice'] = 'Choice cognitive';
$string['indicator:cognitivedepthdata'] = 'Database cognitive';
$string['indicator:cognitivedepthfeedback'] = 'Feedback cognitive';
$string['indicator:cognitivedepthfolder'] = 'Folder cognitive';
$string['indicator:cognitivedepthforum'] = 'Forum cognitive';
$string['indicator:cognitivedepthglossary'] = 'Glossary cognitive';
$string['indicator:cognitivedepthimscp'] = 'IMS content packages\' cognitive';
$string['indicator:cognitivedepthlabel'] = 'Label cognitive';
$string['indicator:cognitivedepthlesson'] = 'Lesson cognitive';
$string['indicator:cognitivedepthlti'] = 'LTI cognitive';
$string['indicator:cognitivedepthpage'] = 'Page cognitive';
$string['indicator:cognitivedepthquiz'] = 'Quiz cognitive';
$string['indicator:cognitivedepthresource'] = 'File cognitive';
$string['indicator:cognitivedepthscorm'] = 'SCORM cognitive';
$string['indicator:cognitivedepthsurvey'] = 'Survey cognitive';
$string['indicator:cognitivedepthurl'] = 'URL cognitive';
$string['indicator:cognitivedepthwiki'] = 'Wiki cognitive';
$string['indicator:cognitivedepthworkshop'] = 'Workshop cognitive';
$string['indicator:completeduserprofile'] = 'User profile is completed';
$string['indicator:readactions'] = 'Read actions amount';
$string['indicator:socialbreadthassign'] = 'Assignment social';
$string['indicator:socialbreadthbook'] = 'Book social';
$string['indicator:socialbreadthchat'] = 'Chat social';
$string['indicator:socialbreadthchoice'] = 'Choice social';
$string['indicator:socialbreadthdata'] = 'Database social';
$string['indicator:socialbreadthfeedback'] = 'Feedback social';
$string['indicator:socialbreadthfolder'] = 'Folder social';
$string['indicator:socialbreadthforum'] = 'Forum social';
$string['indicator:socialbreadthglossary'] = 'Glossary social';
$string['indicator:socialbreadthimscp'] = 'IMS content packages\' social';
$string['indicator:socialbreadthlabel'] = 'Label social';
$string['indicator:socialbreadthlesson'] = 'Lesson social';
$string['indicator:socialbreadthlti'] = 'LTI social';
$string['indicator:socialbreadthpage'] = 'Page social';
$string['indicator:socialbreadthquiz'] = 'Quiz social';
$string['indicator:socialbreadthresource'] = 'File social';
$string['indicator:socialbreadthscorm'] = 'SCORM social';
$string['indicator:socialbreadthsurvey'] = 'Survey social';
$string['indicator:socialbreadthurl'] = 'URL social';
$string['indicator:socialbreadthwiki'] = 'Wiki social';
$string['indicator:socialbreadthworkshop'] = 'Workshop social';
$string['indicator:userforumstracking'] = 'User is tracking forums';
$string['indicators'] = 'Indicators';
$string['info'] = 'Info';
$string['insightinfo'] = '{$a->insightname} - {$a->contextname}';
$string['insightinfomessage'] = 'There are some insights you may find useful. Check out {$a}';
$string['insightmessagesubject'] = 'New insight for "{$a->contextname}": {$a->insightname}';
$string['insights'] = 'Insights';
$string['inspire:listinsights'] = 'List insights';
$string['inspire:managemodels'] = 'Manage models';
$string['inspiremodels'] = 'Inspire models';
$string['invalidanalysablefortimesplitting'] = 'It can not be analysed using {$a} time splitting method';
$string['invalidtimesplitting'] = 'Model with id {$a} needs a time splitting method before it can be used to train';
$string['labelstudentdropoutno'] = 'Not at risk';
$string['labelstudentdropoutyes'] = 'Student at risk of dropping out';
$string['loginfo'] = 'Log extra info';
$string['lowaccuracy'] = 'The model accuracy is low';
$string['messageprovider:insights'] = 'Insights generated by prediction models';
$string['modeloutputdir'] = 'Models output directory';
$string['modeloutputdirinfo'] = 'Directory where prediction processors store all evaluation info. Useful for debugging and research.';
$string['modelresults'] = '{$a} results';
$string['modelslist'] = 'Models list';
$string['modeltimesplitting'] = 'Time splitting';
$string['nocompletiondetection'] = 'No method available to detect course completion (no completion nor competencies nor course grade pass)';
$string['nocourseactivity'] = 'Not enough course activity between the start and the end of the course';
$string['nocourseendtime'] = 'The course does not have an end time';
$string['nocourses'] = 'No courses to analyse';
$string['nocoursesections'] = 'No course sections';
$string['nocoursestudents'] = 'No students';
$string['nodata'] = 'No data available';
$string['nodatatoevaluate'] = 'There is no data to evaluate the model';
$string['nodatatopredict'] = 'There is no data to use for predictions';
$string['nodatatotrain'] = 'There is no data to use as training data';
$string['nonewdata'] = 'No new data available';
$string['nonewtimeranges'] = 'No new time ranges, nothing to predict';
$string['nopredictionsyet'] = 'No predictions available yet';
$string['notdefined'] = 'Not yet defined';
$string['novaliddata'] = 'No valid data available';
$string['pluginname'] = 'Inspire';
$string['prediction'] = 'Prediction';
$string['predictiondetails'] = 'Prediction details';
$string['predictionprocessfinished'] = 'Prediction process finished';
$string['predictionresults'] = 'Prediction results';
$string['predictions'] = 'Predictions';
$string['predictionsprocessor'] = 'Predictions processor';
$string['predictionsprocessor_help'] = 'Prediction processors are the machine learning backends that process the datasets generated by calculating models\' indicators and targets.';
$string['predictmodels'] = 'Predict models';
$string['predictorresultsin'] = 'Predictor logged information in {$a} directory';
$string['processingsitecontents'] = 'Processing site contents';
$string['sameenddate'] = 'Current end date is good';
$string['samestartdate'] = 'Current start date is good';
$string['selectotherinsights'] = 'Select other insights...';
$string['skippingcourse'] = 'Skipping course {$a}';
$string['studentroles'] = 'Student roles';
$string['subplugintype_predict'] = 'Predictions processor';
$string['subplugintype_predict_plural'] = 'Predictions processors';
$string['successfullyanalysed'] = 'Successfully analysed';
$string['target'] = 'Target';
$string['target:coursedropout'] = 'Students at risk of dropping out';
$string['target:coursedropoutinfo'] = 'Here you can find a list of students at risk of dropping out.';
$string['teacherroles'] = 'Teacher roles';
$string['timemodified'] = 'Last modification';
$string['timesplitting:deciles'] = 'Deciles';
$string['timesplitting:decilesaccum'] = 'Deciles accumulative';
$string['timesplitting:nosplitting'] = 'No time splitting';
$string['timesplitting:quarters'] = 'Quarters';
$string['timesplitting:quartersaccum'] = 'Quarters accumulative';
$string['timesplitting:singlerange'] = 'Single range';
$string['timesplitting:weekly'] = 'Weekly';
$string['timesplitting:weeklyaccum'] = 'Weekly accumulative';
$string['timesplittingmethod'] = 'Time splitting method';
$string['timesplittingmethod_help'] = 'The time splitting method divides the course duration in parts, the predictions engine will run at the end of these parts. It is recommended that you only enable the time splitting methods you could be interested on using; the evaluation process will iterate through all of them so the more time splitting methods to go through the slower the evaluation process will be.';
$string['trainingprocessfinished'] = 'Training process finished';
$string['trainingresults'] = 'Training results';
$string['trainmodels'] = 'Train models';
$string['viewlog'] = 'Log';
$string['viewprediction'] = 'View prediction details';
$string['viewpredictions'] = 'View model predictions';
$string['weeksenddateautomaticallyset'] = 'End date automatically set based on start date and the number of sections';
$string['weeksenddatedefault'] = 'End date would be automatically calculated from the course start date';
