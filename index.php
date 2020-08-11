<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Microservice Migration Meta-Approach Web-based Tool</title>

    <meta name="author" content="QiwenGu">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid" style="padding:30px">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header" style="text-align:center">
                    <h1>
                        Microservice Migration Meta-Approach Web-based Tool
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top:50px">
                <h4>
                    Please select one or more choices for each section, and click search for the result.
                </h4></br>
                <h5>
                    ✓ = Include ◯ = neutral ✗ = Exclude
                </h5></br>

            </div>
        </div>
        <form class="bg-light text-dark" action="search.php" method="post">
            <!-- 1st Row -->
            <div class="row" style="padding-top:50px;padding-left:50px;padding-right:50px">

                <!-- Process Column-->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12" id="Process" name="Process" value="Process">
                            <h5>
                                Process Strategy
                            </h5>
                            <p>
                                <em>Strategy for implementing the migration</em>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Rewrite</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Process_Rewrite">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Rewrite" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Rewrite" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Rewrite" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Extension</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Process_Extension">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Extension" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Extension" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Extension" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Strangler Pattern</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Process_StranglerPattern">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_StranglerPattern" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_StranglerPattern" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_StranglerPattern" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Continuous Evolution</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Process_ContinuousEvolution">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_ContinuousEvolution" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_ContinuousEvolution" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_ContinuousEvolution" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Splitting the existing code base</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Process_Split">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Split" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Split" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Split" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Other Processes</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="ProcessOthers">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Others" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Others" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Process_Others" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Decomposition Column-->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12" id="Decomposition" name="Decomposition" value="Decomposition">
                            <h5>
                                Decomposition Strategy
                            </h5>
                            <p>
                                <em>Strategy for decomposing the monolithic application</em>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Domain-Driven Design</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Decomposition_DDD">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_DDD" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_DDD" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_DDD" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Functional Decomposition</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Decomposition_FunctionalDecomposition">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_FunctionalDecomposition" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_FunctionalDecomposition" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_FunctionalDecomposition" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Existing Structure</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Decomposition_ExistingStructure">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_ExistingStructure" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_ExistingStructure" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_ExistingStructure" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Other Decomposition</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Decomposition_Others">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_Others" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_Others" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Decomposition_Others" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2nd Row -->
            <div class="row" style="padding-top:50px;padding-left:50px;padding-right:50px">

                <!-- Technique Column-->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12" id="Technique" name="Technique" value="Technique">
                            <h5>
                                Technique Type
                            </h5>
                            <p>
                                <em>Detailed steps applied for migration</em>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Static (Code) Analysis</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Technique_SCA">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_SCA" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_SCA" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_SCA" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Meta-Data Aided</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Technique_MDA">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_MDA" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_MDA" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_MDA" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Workload-Data Aided</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Technique_WDA">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_WDA" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_WDA" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_WDA" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Dynamic Microservice Composition</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Technique_DMC">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_DMC" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_DMC" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_DMC" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Applicability Column-->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12" id="Applicability" name="Applicability" value="Applicability">
                            <h5>
                                Applicability
                            </h5>
                            <p>
                                <em>Applicable scenario and suitable system structure</em>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Microservices Greenfield Development</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="GR">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="GR" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="GR" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="GR" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Monolith Migrations</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="MO">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="MO" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="MO" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="MO" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 3rd Row -->
            <div class="row" style="padding-top:50px;padding-left:50px;padding-right:50px">

                <!-- Input Column-->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12" id="Input" name="Input" value="Input">
                            <h5>
                                Input
                            </h5>
                            <p>
                                <em>Avaliable input from the current application</em>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Source Code</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Input_SourceCode">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_SourceCode" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_SourceCode" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_SourceCode" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Use Case Diagram</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Input_UseCase">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_UseCase" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_UseCase" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_UseCase" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>System Specification</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Input_SystemSpecification">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_SystemSpecification" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_SystemSpecification" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_SystemSpecification" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Application Programming Interface (API)</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Input_API">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_API" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_API" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_API" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Other Input</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Input_Others">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_Others" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_Others" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Input_Others" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Output Column-->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12" id="Output" name="Output" value="Output">
                            <h5>
                                Output
                            </h5>
                            <p>
                                <em>Applicable output by the approach</em>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Candidate List of Microservices</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Output_List">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Output_List" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Output_List" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Output_List" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Microservice Architecture</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Output_Archi">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Output_Archi" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Output_Archi" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Output_Archi" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Other Output</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Output_Others">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Output_Others" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Output_Others" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Output_Others" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4th Row -->
            <div class="row" style="padding-top:50px;padding-left:50px;padding-right:50px">

                <!-- Validation Column-->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12" id="Validation" name="Validation" value="Validation">
                            <h5>
                                Validation Type
                            </h5>
                            <p>
                                <em>Included validation type by the approach</em>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Experiment</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Validation_Experiment">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_Experiment" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_Experiment" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_Experiment" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Example</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Validation_Example">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_Example" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_Example" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_Example" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Case Study</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Validation_CaseStudy">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_CaseStudy" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_CaseStudy" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_CaseStudy" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quality Column-->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12" id="Quality" name="Quality" value="Quality">
                            <h5>
                                Quality Metrics/Intension
                            </h5>
                            <p>
                                <em>Quality metrics or intension considered by the approach</em>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Maintainability</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Quality_Maintainability">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Maintainability" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Maintainability" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Maintainability" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Performance</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Quality_Performance">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Performance" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Performance" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Performance" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Reliability</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Quality_Reliability">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Reliability" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Reliability" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Reliability" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Scalability</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Quality_Scalability">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Scalability" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Scalability" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Scalability" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Security</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Quality_Security">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Security" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Security" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Security" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Other Quality</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Quality_Others">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Others" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Others" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Quality_Others" value="Exclude"> ✗
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="margin:50px;">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-outline-success btn-block btn-lg" name="subject" id="ShowAll" value="ShowAll">
                </div>

                <div class="col-md-6">
                    <input type="submit" class="btn btn-outline-primary btn-block btn-lg" name="subject" id="Search" value="Search">
                </div>
            </div>
        </form>
    </div>
    <!-- obsolescent function
    <script language="JavaScript">
        var processChecked = false;
        var decompositionChecked = false;
        var techniqueChecked = false;
        var applicabilityChecked = false;
        var inputChecked = false;
        var outputChecked = false;
        var validationChecked = false;
        var qualityChecked = false;

        function selectAll(checkBoxGroup) {
            switch (checkBoxGroup) {
                case 0:
                    selectProcess();
                    break;
                case 1:
                    selectDecomposition();
                    break;
                case 2:
                    selectTechnique();
                    break;
                case 3:
                    selectApplicability();
                    break;
                case 4:
                    selectInput();
                    break;
                case 5:
                    selectOutput();
                    break;
                case 6:
                    selectValidation();
                    break;
                case 7:
                    selectQuality();
                    break;
            }
        }

        function selectProcess() {
            if (processChecked == false) {
                document.getElementById("Rewrite").checked = true;
                document.getElementById("Extension").checked = true;
                document.getElementById("StranglerPattern").checked = true;
                document.getElementById("ContinuousEvolution").checked = true;
                document.getElementById("Split").checked = true;
                document.getElementById("ProcessStrategyOthers").checked = true;
                processChecked = true;
            } else {
                document.getElementById("Rewrite").checked = false;
                document.getElementById("Extension").checked = false;
                document.getElementById("StranglerPattern").checked = false;
                document.getElementById("ContinuousEvolution").checked = false;
                document.getElementById("Split").checked = false;
                document.getElementById("ProcessStrategyOthers").checked = false;
                processChecked = false;
            }
        }

        function selectDecomposition() {
            if (decompositionChecked == false) {
                document.getElementById("DDD").checked = true;
                document.getElementById("FunctionalDecomposition").checked = true;
                document.getElementById("ExistingStructure").checked = true;
                document.getElementById("DecompositionStrategyOthers").checked = true;
                decompositionChecked = true;
            } else {
                document.getElementById("DDD").checked = false;
                document.getElementById("FunctionalDecomposition").checked = false;
                document.getElementById("ExistingStructure").checked = false;
                document.getElementById("DecompositionStrategyOthers").checked = false;
                decompositionChecked = false;
            }
        }

        function selectTechnique() {
            if (techniqueChecked == false) {
                document.getElementById("SCA").checked = true;
                document.getElementById("MDA").checked = true;
                document.getElementById("WDA").checked = true;
                document.getElementById("DMC").checked = true;
                techniqueChecked = true;
            } else {
                document.getElementById("SCA").checked = false;
                document.getElementById("MDA").checked = false;
                document.getElementById("WDA").checked = false;
                document.getElementById("DMC").checked = false;
                techniqueChecked = false;
            }
        }

        function selectApplicability() {
            if (applicabilityChecked == false) {
                document.getElementById("GR").checked = true;
                document.getElementById("MO").checked = true;
                applicabilityChecked = true;
            } else {
                document.getElementById("GR").checked = false;
                document.getElementById("MO").checked = false;
                applicabilityChecked = false;
            }
        }

        function selectInput() {
            if (inputChecked == false) {
                document.getElementById("SourceCode").checked = true;
                document.getElementById("UseCase").checked = true;
                document.getElementById("SystemSpecification").checked = true;
                document.getElementById("API").checked = true;
                document.getElementById("InputOthers").checked = true;
                inputChecked = true;
            } else {
                document.getElementById("SourceCode").checked = false;
                document.getElementById("UseCase").checked = false;
                document.getElementById("SystemSpecification").checked = false;
                document.getElementById("API").checked = false;
                document.getElementById("InputOthers").checked = false;
                inputChecked = false;
            }
        }

        function selectOutput() {
            if (outputChecked == false) {
                document.getElementById("List").checked = true;
                document.getElementById("Archi").checked = true;
                document.getElementById("OutputOthers").checked = true;
                outputChecked = true;
            } else {
                document.getElementById("List").checked = false;
                document.getElementById("Archi").checked = false;
                document.getElementById("OutputOthers").checked = false;
                outputChecked = false;
            }
        }

        function selectValidation() {
            if (validationChecked == false) {
                document.getElementById("Experiment").checked = true;
                document.getElementById("Example").checked = true;
                document.getElementById("CaseStudy").checked = true;
                validationChecked = true;
            } else {
                document.getElementById("Experiment").checked = false;
                document.getElementById("Example").checked = false;
                document.getElementById("CaseStudy").checked = false;
                validationChecked = false;
            }
        }

        function selectQuality() {
            if (qualityChecked == false) {
                document.getElementById("Maintainability").checked = true;
                document.getElementById("Performance").checked = true;
                document.getElementById("Reliability").checked = true;
                document.getElementById("Scalability").checked = true;
                document.getElementById("Security").checked = true;
                document.getElementById("QualityOthers").checked = true;
                qualityChecked = true;
            } else {
                document.getElementById("Maintainability").checked = false;
                document.getElementById("Performance").checked = false;
                document.getElementById("Reliability").checked = false;
                document.getElementById("Scalability").checked = false;
                document.getElementById("Security").checked = false;
                document.getElementById("QualityOthers").checked = false;
                qualityChecked = false;
            }
        }
    </script>
    -->
</body>

</html>