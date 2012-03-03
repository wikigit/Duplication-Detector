<!--
Copyright (c) 2011, Derrick Coetzee (User:Dcoetzee)
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

 * Redistributions of source code must retain the above copyright notice, this
   list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright notice,
   this list of conditions and the following disclaimer in the documentation
   and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
--><html>
<head>
<title>Duplication Detector</title>
</head>
<body>
<h1>Duplication Detector</h1>

<p><i>Duplication Detector</i>, created for <a href="http://en.wikipedia.org/wiki/Wikipedia:Copyright problems">Wikipedia:Copyright problems</a>  on the English Wikipedia, is a tool used to compare any two web pages to identify text which has been copied from one to the other. Either, neither, or both pages may be current or old revisions of a Wikipedia article.</p>

<p>Please supply the URLs of two websites to compare (you can also choose, using the advanced version, to upload either document from your computer). The tool supports text, HTML, and PDF documents. For other types of documents, check Google's cache for an HTML version by doing a Google search for "cache:URL". To make the tool run faster for very large documents, increase minimum number of words to 3. For source documents containing scattered numerals, you may have to check "Remove numbers" to get the best matches.</p>

<p>Duplication Detector can see article text hidden by templates like {{copyvio}}, since the text is still in the HTML page source, but cannot see text that has been removed. You need to use the URL of an old revision in this case.</p>

<i>Simple version (generates pages that can be linked to):</i><br/>
<hr/>
<form name="comparesimple" action="compare.php" method="get">
Document 1 (URL): <input type="text" name="url1" size="120"><br/>
Document 2 (URL): <input type="text" name="url2" size="120"><br/>
<br/>
Minimum number of words: <input type="text" name="minwords" value="2"><br/>
Minimum number of characters: <input type="text" name="minchars" value="13"><br/>
Remove quotations: <input type="checkbox" name="removequotations" value="1"><br/>
Remove numbers: <input type="checkbox" name="removenumbers" value="1"><br/>
<br/>
<input type="submit" value="Compare" />
</form>
<hr/>
<p/>
<i>Advanced version (allows uploads):</i><br/>
<hr/>
<form enctype="multipart/form-data" name="compareadvanced" action="compare.php" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
Document 1 (URL): <input type="text" name="url1" size="120"><br/>
<i>(or)</i> Document 1 (Upload): <input type="file" name="file1"><br/>
<br/>
Document 2 (URL): <input type="text" name="url2" size="120"><br/>
<i>(or)</i> Document 2 (Upload): <input type="file" name="file2"><br/>
<br/>
Minimum number of words: <input type="text" name="minwords" value="2"><br/>
Minimum number of characters: <input type="text" name="minchars" value="13"><br/>
Remove quotations: <input type="checkbox" name="removequotations" value="1"><br/>
Remove numbers: <input type="checkbox" name="removenumbers" value="1"><br/>
<br/>
<input type="submit" value="Compare" />
</form>
<hr/>

<p>Things to do in the future:
<ul>
<li>Caching results for repeated queries</li>
<li>Use a statistical model to rule out common phrases and proper names</li>
<li>Show side-by-side comparison of phrases in original context with original capitalization and punctuation</li>
<li>Detect copying of long phrases with minor modifications such as removed/added/modified words</li>
</ul>
</p>

<p>If you have any questions about Duplication Detector, please contact its author Derrick Coetzee at <a href="http://en.wikipedia.org/wiki/User_talk:Dcoetzee">his talk page on English Wikipedia</a>.</p>

<p>The PHP source for Duplication Detector is available under the <a href="http://www.opensource.org/licenses/bsd-license.php">Simplified BSD License</a>. It does <i>not</i> require Toolserver to run, so feel free to download and use it yourself using your own webserver or <i>php</i> command-line tool. (<a href="../downloads/duplication_detector.tar.gz">.tar.gz</a>) (<a href="../downloads/duplication_detector.zip">.zip</a>) Latest version <a href="https://github.com/wikigit/Duplication-Detector">available from Github</a>.</p>

</body>
</html>
