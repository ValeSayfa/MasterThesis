<?php
//Get all data from database
function showAll($conn)
{
    changeText("DefaultString", "Show All Result");
    $sql = "SELECT * FROM contribution";
    return getData($conn, $sql, 0, 0);
}


//Search specific data from database by conditions
function search($conn)
{
    $includedValue = getIncludedValues(); //Get user included values
    $excludedValue = getExcludedValues(); //Get user excluded values
    if ($includedValue != "" && $excludedValue != "") {
        changeText("ShowSearchString", "Include: " . $includedValue . "</br>Exclude: " . $excludedValue);
    } elseif ($includedValue != "") {
        changeText("ShowSearchString", "Include: " . $includedValue);
    } elseif ($excludedValue != "") {
        changeText("ShowSearchString", "Exclude: " . $excludedValue);
    } else {
        changeText("DefaultString", "Default Search");
    }
    $searchString = getSearchString();
    $sql = "SELECT * FROM contribution" . $searchString;
    //echo $sql;
    $inputObject = new searchObject();
    $inputObject->set_attributes();
    return getData($conn, $sql, $inputObject, 1);
}


//Search data by SQL sentence and show data in html, include searchObject for result matching
function getData($conn, $sql, $inputObject, $searchMode)
{
    $result = $conn->query($sql);
    $resultArray = array();
    $count = 0; // No. of contribution in the list (for toggling row color)
    //echo $result->num_rows . "results<br>";
    if ($result->num_rows > 0) {
        //Get all data row by row, pass attribute of "id" by URL to detail page
        while ($row = $result->fetch_assoc()) {
            $rowElement = new searchObject();
            $rowElement->set_dataAttributes($inputObject, $row, $searchMode);
            $resultArray[$count] = array();
            $resultArray[$count]["id"] = $row["id"];
            $resultArray[$count]["Title"] =  $row["Title"];
            $resultArray[$count]["Year"] = $row["Year"];
            $resultArray[$count]["Authors"] =  $row["Authors"];
            $resultArray[$count]["Score"] =  $row["Score"];
            $resultArray[$count]["MatchScore"] =  $rowElement->get_matchScore();
            $resultArray[$count]["MisMatch"] =  $rowElement->get_misMatch();
            $count += 1;
        }
    }
    changeText("ResultCount", "Result list: " . $count . " countribution(s)");
    if ($count != 0) {
        generateContent($resultArray);
    }
    return $resultArray;
}


//Echo result array title for debug
function showResultArray($resultArray)
{
    for ($count = 0; $count < count($resultArray); $count++) {
        echo $resultArray[$count]["Title"] . "<br/>";
    }
}


//Gernerate table from searched result
function generateContent($resultArray)
{
    for ($count = 0; $count < count($resultArray); $count++) {
        echo "<tr name=\"content\" id=\"" . $resultArray[$count]["id"] . "\" ><td>" . $resultArray[$count]["id"] . "</td><td><a href=\"result.php?id=" . $resultArray[$count]["id"] . "\"  target=\"_blank\">" . $resultArray[$count]["Title"] . "</td><td>" . $resultArray[$count]["Year"] . "</td><td>" . $resultArray[$count]["Authors"] . "</td><td>" . $resultArray[$count]["Score"] . "</td><td><del>" . $resultArray[$count]["MisMatch"] . "</del></td><td>" . $resultArray[$count]["MatchScore"] . "</td></tr>";
    }
}


//Get all index.php include value
function getIncludedValues()
{
    $includedValue = "";
    $includedValue .= getIncludedValueByName("Process_Rewrite");
    $includedValue .= getIncludedValueByName("Process_Extension");
    $includedValue .= getIncludedValueByName("Process_StranglerPattern");
    $includedValue .= getIncludedValueByName("Process_ContinuousEvolution");
    $includedValue .= getIncludedValueByName("Process_Split");
    $includedValue .= getIncludedValueByName("Process_Others");
    $includedValue .= getIncludedValueByName("Decomposition_DDD");
    $includedValue .= getIncludedValueByName("Decomposition_FunctionalDecomposition");
    $includedValue .= getIncludedValueByName("Decomposition_ExistingStructure");
    $includedValue .= getIncludedValueByName("Decomposition_Others");
    $includedValue .= getIncludedValueByName("Technique_SCA");
    $includedValue .= getIncludedValueByName("Technique_MDA");
    $includedValue .= getIncludedValueByName("Technique_WDA");
    $includedValue .= getIncludedValueByName("Technique_DMC");
    $includedValue .= getIncludedValueByName("GR");
    $includedValue .= getIncludedValueByName("MO");
    $includedValue .= getIncludedValueByName("Input_SourceCode");
    $includedValue .= getIncludedValueByName("Input_UseCase");
    $includedValue .= getIncludedValueByName("Input_SystemSpecification");
    $includedValue .= getIncludedValueByName("Input_API");
    $includedValue .= getIncludedValueByName("Input_Others");
    $includedValue .= getIncludedValueByName("Output_List");
    $includedValue .= getIncludedValueByName("Output_Archi");
    $includedValue .= getIncludedValueByName("Output_Others");
    $includedValue .= getIncludedValueByName("Validation_Experiment");
    $includedValue .= getIncludedValueByName("Validation_Example");
    $includedValue .= getIncludedValueByName("Validation_CaseStudy");
    $includedValue .= getIncludedValueByName("Quality_Maintainability");
    $includedValue .= getIncludedValueByName("Quality_Performance");
    $includedValue .= getIncludedValueByName("Quality_Reliability");
    $includedValue .= getIncludedValueByName("Quality_Scalability");
    $includedValue .= getIncludedValueByName("Quality_Security");
    $includedValue .= getIncludedValueByName("Quality_Others");

    return $includedValue;
}


//Get included radio button value by group name in index.php
function getIncludedValueByName($name)
{
    if (isset($_POST[$name]) && $_POST[$name] == "Include") {
        return $name . "; ";
    }
}


//Get all index.php checkBox value
function getExcludedValues()
{
    $excludedValue = "";
    $excludedValue .= getExcludedValueByName("Process_Rewrite");
    $excludedValue .= getExcludedValueByName("Process_Extension");
    $excludedValue .= getExcludedValueByName("Process_StranglerPattern");
    $excludedValue .= getExcludedValueByName("Process_ContinuousEvolution");
    $excludedValue .= getExcludedValueByName("Process_Split");
    $excludedValue .= getExcludedValueByName("Process_Others");
    $excludedValue .= getExcludedValueByName("Decomposition_DDD");
    $excludedValue .= getExcludedValueByName("Decomposition_FunctionalDecomposition");
    $excludedValue .= getExcludedValueByName("Decomposition_ExistingStructure");
    $excludedValue .= getExcludedValueByName("Decomposition_Others");
    $excludedValue .= getExcludedValueByName("Technique_SCA");
    $excludedValue .= getExcludedValueByName("Technique_MDA");
    $excludedValue .= getExcludedValueByName("Technique_WDA");
    $excludedValue .= getExcludedValueByName("Technique_DMC");
    $excludedValue .= getExcludedValueByName("GR");
    $excludedValue .= getExcludedValueByName("MO");
    $excludedValue .= getExcludedValueByName("Input_SourceCode");
    $excludedValue .= getExcludedValueByName("Input_UseCase");
    $excludedValue .= getExcludedValueByName("Input_SystemSpecification");
    $excludedValue .= getExcludedValueByName("Input_API");
    $excludedValue .= getExcludedValueByName("Input_Others");
    $excludedValue .= getExcludedValueByName("Output_List");
    $excludedValue .= getExcludedValueByName("Output_Archi");
    $excludedValue .= getExcludedValueByName("Output_Others");
    $excludedValue .= getExcludedValueByName("Validation_Experiment");
    $excludedValue .= getExcludedValueByName("Validation_Example");
    $excludedValue .= getExcludedValueByName("Validation_CaseStudy");
    $excludedValue .= getExcludedValueByName("Quality_Maintainability");
    $excludedValue .= getExcludedValueByName("Quality_Performance");
    $excludedValue .= getExcludedValueByName("Quality_Reliability");
    $excludedValue .= getExcludedValueByName("Quality_Scalability");
    $excludedValue .= getExcludedValueByName("Quality_Security");
    $excludedValue .= getExcludedValueByName("Quality_Others");

    return $excludedValue;
}


//Get included radio button value by group name in index.php
function getExcludedValueByName($name)
{
    if (isset($_POST[$name]) && $_POST[$name] == "Exclude") {
        return $name . "; ";
    }
}


//Get mySQL search string by index.php checkbox value
function getSearchString()
{
    $searchString = " WHERE (Technique_Others = 1 OR Validation_NoValidation =1 OR ";

    $searchString .= getIncludedSearchString();
    $searchString = substr($searchString, 0, strlen($searchString) - 4) . ")"; //delete the last " OR " four characters
    $excludeString = getExcludedSearchString();
    if ($excludeString != "") { // Exclude aspects exists    
        $excludeString = substr($excludeString, 0, strlen($excludeString) - 5); //delete the last " AND " five characters
        $searchString .= " AND (" . $excludeString . ")"; //add exclude aspects at the end
    }
    return $searchString;
}


//Get all excluded search string
function getExcludedSearchString()
{
    $searchString = "";

    $searchString .= getExcludedSearchStringbyName("Process_Rewrite");
    $searchString .= getExcludedSearchStringbyName("Process_Extension");
    $searchString .= getExcludedSearchStringbyName("Process_StranglerPattern");
    $searchString .= getExcludedSearchStringbyName("Process_ContinuousEvolution");
    $searchString .= getExcludedSearchStringbyName("Process_Split");
    $searchString .= getExcludedSearchStringbyName("Process_Others");
    $searchString .= getExcludedSearchStringbyName("Decomposition_DDD");
    $searchString .= getExcludedSearchStringbyName("Decomposition_FunctionalDecomposition");
    $searchString .= getExcludedSearchStringbyName("Decomposition_ExistingStructure");
    $searchString .= getExcludedSearchStringbyName("Decomposition_Others");
    $searchString .= getExcludedSearchStringbyName("Technique_SCA");
    $searchString .= getExcludedSearchStringbyName("Technique_MDA");
    $searchString .= getExcludedSearchStringbyName("Technique_WDA");
    $searchString .= getExcludedSearchStringbyName("Technique_DMC");
    $searchString .= getExcludedSearchStringbyName("Input_SourceCode");
    $searchString .= getExcludedSearchStringbyName("Input_UseCase");
    $searchString .= getExcludedSearchStringbyName("Input_SystemSpecification");
    $searchString .= getExcludedSearchStringbyName("Input_API");
    $searchString .= getExcludedSearchStringbyName("Input_Others");
    $searchString .= getExcludedSearchStringbyName("Output_List");
    $searchString .= getExcludedSearchStringbyName("Output_Archi");
    $searchString .= getExcludedSearchStringbyName("Output_Others");
    $searchString .= getExcludedSearchStringbyName("Validation_Experiment");
    $searchString .= getExcludedSearchStringbyName("Validation_Example");
    $searchString .= getExcludedSearchStringbyName("Validation_CaseStudy");
    $searchString .= getExcludedSearchStringbyName("Quality_Maintainability");
    $searchString .= getExcludedSearchStringbyName("Quality_Performance");
    $searchString .= getExcludedSearchStringbyName("Quality_Reliability");
    $searchString .= getExcludedSearchStringbyName("Quality_Scalability");
    $searchString .= getExcludedSearchStringbyName("Quality_Security");
    $searchString .= getExcludedSearchStringbyName("Quality_Others");

    return $searchString;
}


///Get individual mySQL search string by radio button "Exclude" from radio button group in index.php
function getExcludedSearchStringbyName($name)
{
    $searchString = "";

    if (isset($_POST[$name]) && $_POST[$name] == "Exclude") {
        // loop to retrieve checked values
        $searchString .= $name . "=0 AND ";
    }
    return $searchString;
}


//Get all included search string
function getIncludedSearchString()
{
    $searchString = "";

    $searchString .= getIncludedSearchStringbyName("Process_Rewrite");
    $searchString .= getIncludedSearchStringbyName("Process_Extension");
    $searchString .= getIncludedSearchStringbyName("Process_StranglerPattern");
    $searchString .= getIncludedSearchStringbyName("Process_ContinuousEvolution");
    $searchString .= getIncludedSearchStringbyName("Process_Split");
    $searchString .= getIncludedSearchStringbyName("Process_Others");
    $searchString .= getIncludedSearchStringbyName("Decomposition_DDD");
    $searchString .= getIncludedSearchStringbyName("Decomposition_FunctionalDecomposition");
    $searchString .= getIncludedSearchStringbyName("Decomposition_ExistingStructure");
    $searchString .= getIncludedSearchStringbyName("Decomposition_Others");
    $searchString .= getIncludedSearchStringbyName("Technique_SCA");
    $searchString .= getIncludedSearchStringbyName("Technique_MDA");
    $searchString .= getIncludedSearchStringbyName("Technique_WDA");
    $searchString .= getIncludedSearchStringbyName("Technique_DMC");
    $searchString .= getApplicabilitySearchString();
    $searchString .= getIncludedSearchStringbyName("Input_SourceCode");
    $searchString .= getIncludedSearchStringbyName("Input_UseCase");
    $searchString .= getIncludedSearchStringbyName("Input_SystemSpecification");
    $searchString .= getIncludedSearchStringbyName("Input_API");
    $searchString .= getIncludedSearchStringbyName("Input_Others");
    $searchString .= getIncludedSearchStringbyName("Output_List");
    $searchString .= getIncludedSearchStringbyName("Output_Archi");
    $searchString .= getIncludedSearchStringbyName("Output_Others");
    $searchString .= getIncludedSearchStringbyName("Validation_Experiment");
    $searchString .= getIncludedSearchStringbyName("Validation_Example");
    $searchString .= getIncludedSearchStringbyName("Validation_CaseStudy");
    $searchString .= getIncludedSearchStringbyName("Quality_Maintainability");
    $searchString .= getIncludedSearchStringbyName("Quality_Performance");
    $searchString .= getIncludedSearchStringbyName("Quality_Reliability");
    $searchString .= getIncludedSearchStringbyName("Quality_Scalability");
    $searchString .= getIncludedSearchStringbyName("Quality_Security");
    $searchString .= getIncludedSearchStringbyName("Quality_Others");

    return $searchString;
}

//Get individual mySQL search string by radio button "Include" from radio button group in index.php
function getIncludedSearchStringbyName($name)
{
    $searchString = "";

    if (isset($_POST[$name]) && $_POST[$name] == "Include") {
        // loop to retrieve checked values
        $searchString .= $name . "=1 OR ";
    }
    return $searchString;
}

//Get specific application search string based on selection
function getApplicabilitySearchString()
{
    $applicationSearchString = "";

    $GR = $_POST["GR"];
    $MO = $_POST["MO"];
    if ($GR == "Neutral" && $MO == "Neutral") {
        $applicationSearchString = " Applicability = \"GRMO\" OR ";
    } elseif ($GR == "Include" && $MO == "Neutral") {
        $applicationSearchString = " Applicability = \"GR\" OR Applicability = \"GRMO\" OR ";
    } elseif ($GR == "Neutral" && $MO == "Include") {
        $applicationSearchString = " Applicability = \"MO\" OR Applicability = \"GRMO\" OR ";
    } elseif ($GR == "Include" && $MO == "Include") {
        $applicationSearchString = " Applicability = \"GR\" OR Applicability = \"GRMO\" OR Applicability = \"MO\" OR ";
    } elseif ($GR == "Exclude" && $MO == "Exclude") {
        $applicationSearchString = "";
    } elseif ($GR == "Exclude") {
        $applicationSearchString = " Applicability = \"MO\" OR ";
    } elseif ($MO == "Exclude") {
        $applicationSearchString = " Applicability = \"GR\" OR ";
    }
    //echo $applicationSearchString . "</br>";
    return $applicationSearchString;
}


// Change html content by id
function changeText($tagId, $content)
{
    echo "<script>document.getElementById(\"" . $tagId . "\").innerHTML = \"" . $content . "\";</script>";
}


// Change href link by id
function changeURL($tagId, $content)
{
    echo "<script>document.getElementById(\"" . $tagId . "\").setAttribute('href', \"" . $content . "\");</script>";
}


/* Show the selected search attributes*/
function showProcess($row)
{
    $data = "";

    if ($row["Process_Rewrite"] != 0) {
        $data = $data . "Rewrite; ";
    }
    if ($row["Process_Extension"] != 0) {
        $data = $data . "Extension; ";
    }
    if ($row["Process_StranglerPattern"] != 0) {
        $data = $data . "Strangler Pattern; ";
    }
    if ($row["Process_ContinuousEvolution"] != 0) {
        $data = $data . "Continuous Evolution; ";
    }
    if ($row["Process_Split"] != 0) {
        $data = $data . "Split; ";
    }
    if ($row["Process_Others"] != 0) {
        $data = $data . "Other Process Strategies; ";
    }
    if ($row["ProcessDetail"] != null && strcmp($row["ProcessDetail"], "") != 0) {
        $data = $data . "<br><br><b>Detail:</b> " . $row["ProcessDetail"];
    }
    echo nl2br($data);
}
function showDecomposition($row)
{
    $data = "";

    if ($row["Decomposition_DDD"] != 0) {
        $data = $data . "Domain-Driven Design; ";
    }
    if ($row["Decomposition_FunctionalDecomposition"] != 0) {
        $data = $data . "Functional Decomposition; ";
    }
    if ($row["Decomposition_ExistingStructure"] != 0) {
        $data = $data . "Based on Existing Structure; ";
    }
    if ($row["Decomposition_Others"] != 0) {
        $data = $data . "Other Decomposition Strategies; ";
    }
    if ($row["DecompositionDetail"] != null && strcmp($row["DecompositionDetail"], "") != 0) {
        $data = $data . "<br><br><b>Detail:</b> " . $row["DecompositionDetail"];
    }
    echo nl2br($data);
}
function showTechniqueType($row)
{
    $data = "";

    if ($row["Technique_SCA"] != 0) {
        $data = $data . "Static (Code) Analysis; ";
    }
    if ($row["Technique_MDA"] != 0) {
        $data = $data . "Meta-Data Aided; ";
    }
    if ($row["Technique_WDA"] != 0) {
        $data = $data . "Workload-Data Aidede; ";
    }
    if ($row["Technique_DMC"] != 0) {
        $data = $data . "Dynamic Microservice Composition; ";
    }
    if ($row["Technique_Others"] != 0) {
        $data = $data . "Other Technique Types; ";
    }
    if ($row["TechniqueTypeDetail"] != null && strcmp($row["TechniqueTypeDetail"], "") != 0) {
        $data = $data . "<br><br><b>Detail:</b> " . $row["TechniqueTypeDetail"];
    }
    echo nl2br($data);
}
function showApplicability($row)
{
    switch ($row["Applicability"]) {
        case "GR":
            echo "Green-Field Development";
            break;
        case "MO":
            echo "Brown-Field Development";
            break;
        case "GRMO":
            echo "Green-Field Development or Brown-Field Development";
            break;
        default:
            echo "Error: No Matched Type";
    }
}
function showInput($row)
{
    $data = "";

    if ($row["Input_SourceCode"] != 0) {
        $data = $data . "Source Code; ";
    }
    if ($row["Input_UseCase"] != 0) {
        $data = $data . "Use Case Diagram; ";
    }
    if ($row["Input_SystemSpecification"] != 0) {
        $data = $data . "System Specification; ";
    }
    if ($row["Input_API"] != 0) {
        $data = $data . "API; ";
    }
    if ($row["Input_Others"] != 0) {
        $data = $data . "Other Input Files; ";
    }
    if ($row["InputDetail"] != null && strcmp($row["InputDetail"], "") != 0) {
        $data = $data . "<br><br><b>Detail:</b> " . $row["InputDetail"];
    }
    echo nl2br($data);
}
function showOutput($row)
{
    $data = "";

    if ($row["Output_List"] != 0) {
        $data = $data . "Candidate List of Microservices; ";
    }
    if ($row["Output_Archi"] != 0) {
        $data = $data . "Microservice Architecture; ";
    }
    if ($row["Output_Others"] != 0) {
        $data = $data . "Other Output Files; ";
    }
    if ($row["OutputDetail"] != null && strcmp($row["OutputDetail"], "") != 0) {
        $data = $data . "<br><br><b>Detail:</b> " . $row["OutputDetail"];
    }
    echo nl2br($data);
}
function showValidation($row)
{
    $data = "";

    if ($row["Validation_Experiment"] != 0) {
        $data = $data . "Experiment; ";
    }
    if ($row["Validation_Example"] != 0) {
        $data = $data . "Example; ";
    }
    if ($row["Validation_CaseStudy"] != 0) {
        $data = $data . "Case Study; ";
    }
    if ($row["Validation_NoValidation"] != 0) {
        $data = $data . "No Validation; ";
    }
    if ($row["ValidationTypeDetail"] != null && strcmp($row["ValidationTypeDetail"], "") != 0) {
        $data = $data . "<br><br><b>Detail:</b> " . $row["ValidationTypeDetail"];
    }
    echo nl2br($data);
}
function showQuality($row)
{
    $data = "";

    if ($row["Quality_Maintainability"] != 0) {
        $data = $data . "Maintainability; ";
    }
    if ($row["Quality_Performance"] != 0) {
        $data = $data . "Performance; ";
    }
    if ($row["Quality_Reliability"] != 0) {
        $data = $data . "Reliability; ";
    }
    if ($row["Quality_Scalability"] != 0) {
        $data = $data . "Scalability; ";
    }
    if ($row["Quality_Security"] != 0) {
        $data = $data . "Security; ";
    }
    if ($row["Quality_Others"] != 0) {
        $data = $data . "Other Qualities/ Intensions; ";
    }
    if ($row["QualityDetail"] != null && strcmp($row["QualityDetail"], "") != 0) {
        $data = $data . "<br><br><b>Detail:</b> " . $row["QualityDetail"];
    }
    echo nl2br($data);
}

//Match score calculation
function set_matchScore($inputObject, $row, $searchMode)
{
    if ($searchMode == 0) return number_format($row["Score"] * 20, 2, '.', '');
    $countSelectedAttributes = 0;
    $misMatch = 0;
    if ($inputObject->get_rewrite() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Process_Rewrite"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_extension() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Process_Extension"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_stranglerPattern() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Process_StranglerPattern"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_continuousEvolution() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Process_ContinuousEvolution"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_split() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Process_Split"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_processStrategyOthers() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Process_Others"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_ddd() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Decomposition_DDD"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_functionalDecomposition() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Decomposition_FunctionalDecomposition"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_existingStructure() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Decomposition_ExistingStructure"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_decompositionStrategyOthers() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Decomposition_Others"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_SCA() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Technique_SCA"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_MDA() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Technique_MDA"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_WDA() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Technique_WDA"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_DMC() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Technique_DMC"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_sourceCode() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Input_SourceCode"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_useCase() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Input_UseCase"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_systemSpecification() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Input_SystemSpecification"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_API() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Input_API"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_inputOthers() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Input_Others"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_list() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Output_List"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_archi() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Output_Archi"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_outputOthers() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Output_Others"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_experiment() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Validation_Experiment"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_example() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Validation_Example"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_caseStudy() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Validation_CaseStudy"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_maintainability() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Quality_Maintainability"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_performance() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Quality_Performance"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_reliability() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Quality_Reliability"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_scalability() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Quality_Scalability"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_security() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Quality_Security"] != 1) {
            $misMatch += 1;
        }
    }
    if ($inputObject->get_qualityOthers() == 1) {
        $countSelectedAttributes += 1;
        if ($row["Quality_Others"] != 1) {
            $misMatch += 1;
        }
    }

    if ($countSelectedAttributes == 0) return number_format($row["Score"] * 20, 2, '.', ''); //For default searching, score is kept as before

    return number_format((($countSelectedAttributes - $misMatch) / $countSelectedAttributes * 5 + $row["Score"]) * 10, 2, '.', ''); //Match score function
}

//MisMatch string gerneration
function set_misMatch($inputObject, $row, $searchMode)
{

    if ($searchMode == 0) return "";
    $misMatchString = "";

    if ($inputObject->get_rewrite() == 1) {
        if ($row["Process_Rewrite"] != 1) {
            $misMatchString .= "Rewrite; ";
        }
    }
    if ($inputObject->get_extension() == 1) {
        if ($row["Process_Extension"] != 1) {
            $misMatchString .= "Extension; ";
        }
    }
    if ($inputObject->get_stranglerPattern() == 1) {
        if ($row["Process_StranglerPattern"] != 1) {
            $misMatchString .= "Strangler Pattern; ";
        }
    }
    if ($inputObject->get_continuousEvolution() == 1) {
        if ($row["Process_ContinuousEvolution"] != 1) {
            $misMatchString .= "Continuous Evolution; ";
        }
    }
    if ($inputObject->get_split() == 1) {
        if ($row["Process_Split"] != 1) {
            $misMatchString .= "Splitting the existing code base; ";
        }
    }
    if ($inputObject->get_processStrategyOthers() == 1) {
        if ($row["Process_Others"] != 1) {
            $misMatchString .= "Other Process Strategies; ";
        }
    }
    if ($inputObject->get_ddd() == 1) {
        if ($row["Decomposition_DDD"] != 1) {
            $misMatchString .= "Domain-Driven Design; ";
        }
    }
    if ($inputObject->get_functionalDecomposition() == 1) {
        if ($row["Decomposition_FunctionalDecomposition"] != 1) {
            $misMatchString .= "Functional Decomposition; ";
        }
    }
    if ($inputObject->get_existingStructure() == 1) {
        if ($row["Decomposition_ExistingStructure"] != 1) {
            $misMatchString .= "Existing System’s Structure; ";
        }
    }
    if ($inputObject->get_decompositionStrategyOthers() == 1) {
        if ($row["Decomposition_Others"] != 1) {
            $misMatchString .= "Other Decomposition Strategies; ";
        }
    }
    if ($inputObject->get_SCA() == 1) {
        if ($row["Technique_SCA"] != 1) {
            $misMatchString .= "Static (Code) Analysis; ";
        }
    }
    if ($inputObject->get_MDA() == 1) {
        if ($row["Technique_MDA"] != 1) {
            $misMatchString .= "Meta-Data Aided; ";
        }
    }
    if ($inputObject->get_WDA() == 1) {
        if ($row["Technique_WDA"] != 1) {
            $misMatchString .= "Workload-Data Aided; ";
        }
    }
    if ($inputObject->get_DMC() == 1) {
        if ($row["Technique_DMC"] != 1) {
            $misMatchString .= "Dynamic Microservice Composition; ";
        }
    }
    if ($inputObject->get_applicability() != "GRMO") { //Applicability have specific value
        $applicability = $inputObject->get_applicability();
        if ($applicability != "") {
            if ($applicability == "MO" && $row["Applicability"] == "GR") {
                $misMatchString .= "GR" . "; ";
            }
            if ($applicability == "GR" && $row["Applicability"] == "MO") {
                $misMatchString .= "MO" . "; ";
            }
        } else {
            $misMatchString .= $row["Applicability"] . "; ";
        }
    }
    if ($inputObject->get_sourceCode() == 1) {
        if ($row["Input_SourceCode"] != 1) {
            $misMatchString .= "Source Code; ";
        }
    }
    if ($inputObject->get_useCase() == 1) {
        if ($row["Input_UseCase"] != 1) {
            $misMatchString .= "Use Case Diagram; ";
        }
    }
    if ($inputObject->get_systemSpecification() == 1) {
        if ($row["Input_SystemSpecification"] != 1) {
            $misMatchString .= "System Specification; ";
        }
    }
    if ($inputObject->get_API() == 1) {
        if ($row["Input_API"] != 1) {
            $misMatchString .= "Application Programming Interface (API); ";
        }
    }
    if ($inputObject->get_inputOthers() == 1) {
        if ($row["Input_Others"] != 1) {
            $misMatchString .= "Other Inputs; ";
        }
    }
    if ($inputObject->get_list() == 1) {
        if ($row["Output_List"] != 1) {
            $misMatchString .= "Candidate List of Microservices; ";
        }
    }
    if ($inputObject->get_archi() == 1) {
        if ($row["Output_Archi"] != 1) {
            $misMatchString .= "Microservice Architecture; ";
        }
    }
    if ($inputObject->get_outputOthers() == 1) {
        if ($row["Output_Others"] != 1) {
            $misMatchString .= "Other Outputs; ";
        }
    }
    if ($inputObject->get_experiment() == 1) {
        if ($row["Validation_Experiment"] != 1) {
            $misMatchString .= "Experiment; ";
        }
    }
    if ($inputObject->get_example() == 1) {
        if ($row["Validation_Example"] != 1) {
            $misMatchString .= "Example; ";
        }
    }
    if ($inputObject->get_caseStudy() == 1) {
        if ($row["Validation_CaseStudy"] != 1) {
            $misMatchString .= "Case Study; ";
        }
    }
    if ($inputObject->get_maintainability() == 1) {
        if ($row["Quality_Maintainability"] != 1) {
            $misMatchString .= "Maintainability; ";
        }
    }
    if ($inputObject->get_performance() == 1) {
        if ($row["Quality_Performance"] != 1) {
            $misMatchString .= "Performance; ";
        }
    }
    if ($inputObject->get_reliability() == 1) {
        if ($row["Quality_Reliability"] != 1) {
            $misMatchString .= "Reliability; ";
        }
    }
    if ($inputObject->get_scalability() == 1) {
        if ($row["Quality_Scalability"] != 1) {
            $misMatchString .= "Scalability; ";
        }
    }
    if ($inputObject->get_security() == 1) {
        if ($row["Quality_Security"] != 1) {
            $misMatchString .= "Security; ";
        }
    }
    if ($inputObject->get_qualityOthers() == 1) {
        if ($row["Quality_Others"] != 1) {
            $misMatchString .= "QualityOthers; ";
        }
    }
    if (strlen($misMatchString) - 2 <= 0) return ""; //No mismatch string
    return substr($misMatchString, 0, strlen($misMatchString) - 2);
}


/* Search Object class for match string comparision*/
class searchObject
{
    private $id;
    private $rewrite;
    private $extension;
    private $stranglerPattern;
    private $continuousEvolution;
    private $split;
    private $processStrategyOthers;
    private $ddd;
    private $functionalDecomposition;
    private $existingStructure;
    private $decompositionStrategyOthers;
    private $SCA;
    private $MDA;
    private $WDA;
    private $DMC;
    private $applicability;
    private $sourceCode;
    private $useCase;
    private $systemSpecification;
    private $API;
    private $inputOthers;
    private $list;
    private $archi;
    private $outputOthers;
    private $experiment;
    private $example;
    private $caseStudy;
    private $maintainability;
    private $performance;
    private $reliability;
    private $scalability;
    private $security;
    private $qualityOthers;
    private $score;
    private $matchScore;
    private $misMatch;


    //Class cunstructor
    public function __construct()
    {
        $this->id = 0;
        $this->rewrite = 0;
        $this->extension = 0;
        $this->stranglerPattern = 0;
        $this->continuousEvolution = 0;
        $this->split = 0;
        $this->processStrategyOthers = 0;
        $this->ddd = 0;
        $this->functionalDecomposition = 0;
        $this->existingStructure = 0;
        $this->decompositionStrategyOthers = 0;
        $this->SCA = 0;
        $this->MDA = 0;
        $this->WDA = 0;
        $this->DMC = 0;
        $this->applicability = 'GRMO';
        $this->sourceCode = 0;
        $this->useCase = 0;
        $this->systemSpecification = 0;
        $this->API = 0;
        $this->inputOthers = 0;
        $this->list = 0;
        $this->archi = 0;
        $this->outputOthers = 0;
        $this->experiment = 0;
        $this->example = 0;
        $this->caseStudy = 0;
        $this->maintainability = 0;
        $this->performance = 0;
        $this->reliability = 0;
        $this->scalability = 0;
        $this->security = 0;
        $this->qualityOthers = 0;
        $this->score = 0;
        $this->matchScore = 0;
        $this->misMatch = "";
    }

    //Echo parameters in class, for debugging
    public function print_out()
    {
        echo "id: " . $this->id . "<br/>";
        echo $this->rewrite;
        echo $this->extension;
        echo $this->stranglerPattern;
        echo $this->continuousEvolution;
        echo $this->split;
        echo $this->processStrategyOthers;
        echo $this->ddd;
        echo $this->functionalDecomposition;
        echo $this->existingStructure;
        echo $this->decompositionStrategyOthers;
        echo $this->SCA;
        echo $this->MDA;
        echo $this->WDA;
        echo $this->DMC;
        echo $this->applicability;
        echo $this->sourceCode;
        echo $this->useCase;
        echo $this->systemSpecification;
        echo $this->API;
        echo $this->inputOthers;
        echo $this->list;
        echo $this->archi;
        echo $this->outputOthers;
        echo $this->experiment;
        echo $this->example;
        echo $this->caseStudy;
        echo $this->maintainability;
        echo $this->performance;
        echo $this->reliability;
        echo $this->scalability;
        echo $this->security;
        echo $this->qualityOthers;
        echo $this->score;
        echo $this->matchScore;
        echo $this->misMatch . "<br/>";
    }


    /*Specific Class attributes getter*/
    public function get_id()
    {
        return $this->id;
    }


    public function get_rewrite()
    {
        return $this->rewrite;
    }


    public function get_extension()
    {
        return $this->extension;
    }

    public function get_stranglerPattern()
    {
        return $this->stranglerPattern;
    }


    public function get_continuousEvolution()
    {
        return $this->continuousEvolution;
    }


    public function get_split()
    {
        return $this->split;
    }


    public function get_processStrategyOthers()
    {
        return $this->processStrategyOthers;
    }


    public function get_ddd()
    {
        return $this->ddd;
    }


    public function get_functionalDecomposition()
    {
        return $this->functionalDecomposition;
    }


    public function get_existingStructure()
    {
        return $this->existingStructure;
    }


    public function get_decompositionStrategyOthers()
    {
        return $this->decompositionStrategyOthers;
    }


    public function get_SCA()
    {
        return $this->SCA;
    }


    public function get_MDA()
    {
        return $this->MDA;
    }


    public function get_WDA()
    {
        return $this->WDA;
    }


    public function get_DMC()
    {
        return $this->DMC;
    }

    public function get_applicability()
    {
        return $this->applicability;
    }


    public function get_sourceCode()
    {
        return $this->sourceCode;
    }


    public function get_useCase()
    {
        return $this->useCase;
    }


    public function get_systemSpecification()
    {
        return $this->systemSpecification;
    }


    public function get_API()
    {
        return $this->API;
    }


    public function get_inputOthers()
    {
        return $this->inputOthers;
    }


    public function get_list()
    {
        return $this->list;
    }


    public function get_archi()
    {
        return $this->archi;
    }


    public function get_outputOthers()
    {
        return $this->outputOthers;
    }


    public function get_experiment()
    {
        return $this->experiment;
    }


    public function get_example()
    {
        return $this->example;
    }


    public function get_caseStudy()
    {
        return $this->caseStudy;
    }


    public function get_maintainability()
    {
        return $this->maintainability;
    }


    public function get_performance()
    {
        return $this->performance;
    }


    public function get_reliability()
    {
        return $this->reliability;
    }


    public function get_scalability()
    {
        return $this->scalability;
    }


    public function get_security()
    {
        return $this->security;
    }


    public function get_qualityOthers()
    {
        return $this->qualityOthers;
    }


    public function get_score()
    {
        return $this->score;
    }


    public function get_matchScore()
    {
        return $this->matchScore;
    }


    public function get_misMatch()
    {
        return $this->misMatch;
    }

    //Set the Object value to 1 if the user checked "Include" in the index.php
    function set_CheckedValue($name)
    {
        if (isset($_POST[$name]) && $_POST[$name] == "Include") {
            return 1;
        }
        return 0;
    }

    //Specific database object attributes setter
    public function set_dataAttributes($inputObject, $row, $searchMode)
    {
        $this->id = $row["id"];
        $this->rewrite = $row["Process_Rewrite"];
        $this->extension = $row["Process_Extension"];
        $this->stranglerPattern = $row["Process_StranglerPattern"];
        $this->continuousEvolution = $row["Process_ContinuousEvolution"];
        $this->split = $row["Process_Split"];
        $this->processStrategyOthers = $row["Process_Others"];
        $this->ddd = $row["Decomposition_DDD"];
        $this->functionalDecomposition = $row["Decomposition_FunctionalDecomposition"];
        $this->existingStructure = $row["Decomposition_ExistingStructure"];
        $this->decompositionStrategyOthers = $row["Decomposition_Others"];
        $this->SCA = $row["Technique_SCA"];
        $this->MDA = $row["Technique_MDA"];
        $this->WDA = $row["Technique_WDA"];
        $this->DMC = $row["Technique_DMC"];
        $this->applicability = $row["Applicability"];
        $this->sourceCode = $row["Input_SourceCode"];
        $this->useCase = $row["Input_UseCase"];
        $this->systemSpecification = $row["Input_SystemSpecification"];
        $this->API = $row["Input_API"];
        $this->inputOthers = $row["Input_Others"];
        $this->list = $row["Output_List"];
        $this->archi = $row["Output_Archi"];
        $this->outputOthers = $row["Output_Others"];
        $this->experiment = $row["Validation_Experiment"];
        $this->example = $row["Validation_Example"];
        $this->caseStudy = $row["Validation_CaseStudy"];
        $this->maintainability = $row["Quality_Maintainability"];
        $this->performance = $row["Quality_Performance"];
        $this->reliability = $row["Quality_Reliability"];
        $this->scalability = $row["Quality_Scalability"];
        $this->security = $row["Quality_Security"];
        $this->qualityOthers = $row["Quality_Others"];
        $this->score = $row["Score"];
        $this->matchScore = set_matchScore($inputObject, $row, $searchMode);
        $this->misMatch = set_misMatch($inputObject, $row, $searchMode);
    }


    //User input object attributes setter
    public function set_attributes()
    {
        $this->id = 0;
        $this->set_process();
        $this->set_decomposition();
        $this->set_technique();
        $this->set_applicability();
        $this->set_input();
        $this->set_output();
        $this->set_validation();
        $this->set_quality();
        $this->score = 0;
        $this->matchScore = 0;
        $this->misMatch = "";
    }


    /*Specific Class attributes setter*/
    public function set_process()
    {
        $this->rewrite = $this->set_CheckedValue("Process_Rewrite");
        $this->extension = $this->set_CheckedValue("Process_Extension");
        $this->stranglerPattern = $this->set_CheckedValue("Process_StranglerPattern");
        $this->continuousEvolution = $this->set_CheckedValue("Process_ContinuousEvolution");
        $this->split = $this->set_CheckedValue("Process_Split");
        $this->processStrategyOthers = $this->set_CheckedValue("Process_Others");
    }


    public function set_decomposition()
    {
        $this->ddd = $this->set_CheckedValue("Decomposition_DDD");
        $this->functionalDecomposition = $this->set_CheckedValue("Decomposition_FunctionalDecomposition");
        $this->existingStructure = $this->set_CheckedValue("Decomposition_ExistingStructure");
        $this->decompositionStrategyOthers = $this->set_CheckedValue("Decomposition_Others");
    }


    public function set_technique()
    {
        $this->SCA = $this->set_CheckedValue("Technique_SCA");
        $this->MDA = $this->set_CheckedValue("Technique_MDA");
        $this->WDA = $this->set_CheckedValue("Technique_WDA");
        $this->DMC = $this->set_CheckedValue("Technique_DMC");
    }


    public function set_applicability()
    {
        $MO = $this->set_CheckedValue("MO");
        $GR = $this->set_CheckedValue("GR");
        if (($MO == 1 && $GR == 1)) {
            $this->applicability = "GRMO";
        } elseif ($MO == 1 && $GR == 0) {
            $this->applicability = "MO";
        } elseif ($MO == 0 && $GR == 1) {
            $this->applicability = "GR";
        } else {
            $this->applicability = "";
        }
    }


    public function set_input()
    {
        $this->sourceCode = $this->set_CheckedValue("Input_SourceCode");
        $this->useCase = $this->set_CheckedValue("Input_UseCase");
        $this->systemSpecification = $this->set_CheckedValue("Input_SystemSpecification");
        $this->API = $this->set_CheckedValue("Input_API");
        $this->inputOthers = $this->set_CheckedValue("Input_Others");
    }


    public function set_output()
    {
        $this->list = $this->set_CheckedValue("Output_List");
        $this->archi = $this->set_CheckedValue("Output_Archi");
        $this->outputOthers = $this->set_CheckedValue("Output_Others");
    }


    public function set_validation()
    {
        $this->experiment = $this->set_CheckedValue("Validation_Experiment");
        $this->example = $this->set_CheckedValue("Validation_Example");
        $this->caseStudy = $this->set_CheckedValue("Validation_CaseStudy");
    }


    public function set_quality()
    {
        $this->maintainability = $this->set_CheckedValue("Quality_Maintainability");
        $this->performance = $this->set_CheckedValue("Quality_Performance");
        $this->reliability = $this->set_CheckedValue("Quality_Reliability");
        $this->scalability = $this->set_CheckedValue("Quality_Scalability");
        $this->security = $this->set_CheckedValue("Quality_Security");
        $this->qualityOthers = $this->set_CheckedValue("Quality_Others");
    }
}


/*Sorting algorithm
function idSort($idAscend, $resultArray)
{
    showResultArray($resultArray);
    if ($idAscend == TRUE) {
        array_multisort(array_column($resultArray, "id"), SORT_ASC, $resultArray);
    } else {
        array_multisort(array_column($resultArray, "id"), SORT_DESC, $resultArray);
    }
    gernerateContent($resultArray);

    return !$idAscend;
}

function yearSort($yearAscend, $resultArray)
{
    showResultArray($resultArray);
    if ($yearAscend == TRUE) {
        array_multisort(array_column($resultArray, "Year"), SORT_ASC, $resultArray);
    } else {
        array_multisort(array_column($resultArray, "Year"), SORT_DESC, $resultArray);
    }
    gernerateContent($resultArray);

    return !$yearAscend;
}

function scoreSort($scoreAscend, $resultArray)
{
    showResultArray($resultArray);
    if ($scoreAscend == TRUE) {
        array_multisort(array_column($resultArray, "Score"), SORT_ASC, $resultArray);
    } else {
        array_multisort(array_column($resultArray, "Score"), SORT_DESC, $resultArray);
    }
    gernerateContent($resultArray);

    return !$scoreAscend;
}

function relevanceSort($relevanceAscend, $resultArray)
{
    showResultArray($resultArray);
    if ($relevanceAscend == TRUE) {
        array_multisort(array_column($resultArray, "MatchScore"), SORT_ASC, $resultArray);
    } else {
        array_multisort(array_column($resultArray, "MatchScore"), SORT_DESC, $resultArray);
    }
    gernerateContent($resultArray);

    return !$relevanceAscend;
}
*/
