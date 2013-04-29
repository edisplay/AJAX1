<?php
/*
 * Copyright 2006 SitePoint Pty. Ltd, www.sitepoint.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
$editEntryId = $_POST["editEntryId"];
sleep(3);
header("Content-Type: text/plain");
print "---\n";
print "status: success\n";
if ($editEntryId == "NewEntryTemp") {
  print "type: new\n";
  print "id: " . time() . "\n";
}
else {
  print "type: edit\n";
  print "id: " . $editEntryId . "\n";
}
print "...";
?>