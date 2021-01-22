<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Microservice Migration Meta-Approach Web-based Tool</title>

    <meta name="author" content="QiwenGu">
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="frontend.js"></script>
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
                <h5>
                This is a web-based tool aims at providing a guideline to software architects during their decision making about microservice migration and help them choose a suitable approach.
                
                    According to your specific requirement and the characteristics of your monolithic application, you can select radio buttons for each property, and decide whether to include this property or not. You can also exclude or leave it as neutral. "Include" button means you want to have it in the migration approach, and vice versa. Additionally, "Neutral" means that you do not care about this specific parameter and leave it free to the approach/ framework. You can move your cursor onto each section title and wait for a while, then an explain of the terminology will pop out to aid your selection. After selection, you can click "Search" button to perform searching in database and the tool will show you a list of matching contributions proposing suitable migration approaches or frameworks. Additionally, you are also allowed to select nothing and leave all parameters as neutral, then the web-based tool will provide you a whole list of contributions from database. Besides, the "Reset" button in the bottom right corner can clear all previous selections and reset the whole web page.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="margin-top:50px">
                <h5><a href="https://github.com/TschiwenGu/MasterThesis#Running-the-web-based-tool" target="_blank">Instructions for using this tool</a></h5>
            </div>
            <div class="col-md-6" style="margin-top:50px">
                <h5 style="text-align:right;">
                    ✓ = Include ◯ = Neutral ✗ = Exclude
                </h5>
            </div>
        </div>

        <form class="bg-light text-dark" method="post">
            <!-- 1st Row -->
            <div class="row" style="padding-top:50px;padding-left:50px;padding-right:50px">

                <!-- Process Column-->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12" id="Process" name="Process" value="Process">
                            <h5 data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"800"}' title="Strategy for implementing the migration, indicating the detailed approaches during migration">
                                Process Strategy <i class="fa fa-question-circle"></i>
                            </h5>
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
                            <h5 data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"800"}' title="Strategy for decomposing the monolithic application, indicating the methodology for decomposotion">
                                Decomposition Strategy <i class="fa fa-question-circle"></i>
                            </h5>
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
                            <h5 data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"800"}' title="Detailed steps applied for migration, indicating the technical steps performed during decomposotion">
                                Technique Type <i class="fa fa-question-circle"></i>
                            </h5>
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

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Other Techniques</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Technique_DMC">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_Others" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_Others" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Technique_Others" value="Exclude"> ✗
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
                            <h5 data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"800"}' title="Applicable scenario and suitable system structure">
                                Applicability <i class="fa fa-question-circle"></i>
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Microservices Greenfield Development</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="GR">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Applicability_GR" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Applicability_GR" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Applicability_GR" value="Exclude"> ✗
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
                                                <input type="radio" name="Applicability_MO" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Applicability_MO" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Applicability_MO" value="Exclude"> ✗
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
                            <h5 data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"800"}' title="Avaliable input from the current application, indicating the necessary resources as pre-conditions">
                                Avaliable Input <i class="fa fa-question-circle"></i>
                            </h5>
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
                            <h5 data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"800"}' title="Resulting output after migration, indicating the final results after implementing this approach">
                                Possible Output <i class="fa fa-question-circle"></i>
                            </h5>
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
                            <h5 data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"800"}' title="Validation type conducted in the contribution, indicating the reliability and correctness about this specific approach">
                                Validation Type <i class="fa fa-question-circle"></i>
                            </h5>
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

                            <div class="row">
                                <div class="col-md-6">
                                    <label>No Validation</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" id="Validation_NoValidation">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_NoValidation" value="Include"> ✓
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_NoValidation" value="Neutral" checked> ◯
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="Validation_NoValidation" value="Exclude"> ✗
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
                            <h5 data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"800"}' title="Quality metrics or intension considered by the approach, act as characteristics which is desired by the user">
                                Quality Metrics/ Intention <i class="fa fa-question-circle"></i>
                            </h5>
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
                    <input type="submit" formtarget="_blank" formaction="search.php" class="btn btn-outline-primary btn-block btn-lg" name="subject" id="Search" value="Search">
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-outline-danger btn-block btn-lg" name="Reset" id="Reset" value="Reset" onClick="window.location.reload();" >Reset</button>
                </div>

            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    

   
</body>

</html>