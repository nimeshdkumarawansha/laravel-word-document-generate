<!DOCTYPE html/>
<html>

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style lang="css" scoped>
        .intro-page {
            border: black solid;
            /* height: 700px; */
        }

        .intro-title {
            text-align: center;
            font-weight: bold;
            font-size: 100px;
        }

        .intro-hr {
            border: none;
            height: 2px;
            background-color: red;
        }

        .third-page-hr {
            height: 2px;
            background-color: black;
            margin-top: -0.9rem;
        }

        .intro-description {
            color: red;
            font-size: 50px;
            font-weight: bold;
        }

        .second-page-line-height {
            line-height: 0.75rem;
        }

        .font-size-1 {
            font-size: 20px;
        }

        .font-size-2 {
            font-size: 17px;
        }

        .font-size-3 {
            font-size: 10px;
        }

        .text-underline {
            text-decoration: underline;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 7px;
            text-align: left;
        }

        .text-capitalize {
            text-transform: capitalize;
        }

        .location-div {
            border: 1px solid black;
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="row p-5 g-0 mt-5">
        <!-- Intro Page -->
        <div class="col-md-10 offset-md-1 col-12 mt-5 intro-page">
            <div class="row g-0">
                <div class="col-md-6 text-start d-flex align-items-center">
                    <h2 class="mx-5"> REF - ........./2023/COM </h2>
                </div>
                <div class="col-md-5 offset-md-1 text-end">
                    {{-- <img class="me-5" src="/img/logo/logo.png" width="200" height="130" alt="IJVR" /> --}}
                </div>
            </div>
            <div class="row">
                <span class="intro-title">
                    VALUATION
                    <br>
                    REPORT
                </span>
                <div class="col-8 offset-2">
                    <hr class="intro-hr"/>
                </div>
                <div class="col-8 offset-2 text-center">
                    <span class="intro-description">Mr.S.S KUMAR, No.97/B, Meethotamulla road,
                        Wellampitiya.</span>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-6 offset-6 text-end mb-2">
                    {{-- <img class="me-2" src="/img/report/intro-page-footer-side.png" height="500" alt="IJVR"/> --}}

                </div>
            </div>
        </div>
        <!-- Intro Page -->

        <!-- Second page -->
        {{-- <div class="col-md-10 offset-md-1 col-12 mt-5 ">
            <div class="row g-0">
                <div class="col-md-3 text-start ">
                    <img src="/img/logo/logo.png" width="200" height="130" alt="IJVR">
                </div>
                <div class="col-md-8 text-start pt-3 mx-3">
                    <h1>WIr.W.A.T.I.P.Jayathilake <span class="font-size-3">(FRICS)</span></h1>
                    <h3 class="second-page-line-height">Charted Validation Surveyor</h3>
                    <h3 class="second-page-line-height">RICS Registered No:6698015</h3>
                    <h3 class="second-page-line-height">IVSL - A/370</h3>
                </div>
            </div>
            <div class="row g-0 mt-5">
                <div class="col-md-5 text-start d-flex align-items-center">
                    <h2 class="mx-5"> REF/..../..... </h2>
                </div>
                <div class="col-md-6 offset-md-1 text-start pt-3">
                    <h1>Confidential</h1>
                    <h3 class="second-page-line-height">.............2023</h3>
                </div>
            </div>
            <div class="row mt-3">
                <p class="second-page-line-height font-size-1">The Manager,</p>
                <p class="second-page-line-height font-size-1"> Commercial Bank PLC,</p>
                <p class="second-page-line-height font-size-1"> ............ Branch,</p>
                <p class="second-page-line-height font-size-1"> ...............</p>

                <p class="second-page-line-height font-size-1 mt-5">Dear Sir,</p>
                <p class="font-size-1 mt-5 text-center text-underline text-capitalize">
                    <b>
                        Valuation report of property depicted as Lot
                        No:..... in Survey Plan No. ... <br>
                        Dated ..... <br>
                        Made by ...............Licensed Surveyor and Leveller
                    </b>
                </p>
            </div>
            <div class="row mt-2">
                <p >
                    The Manager of ……………… branch - ……………. Bank PLC, has requested me to inspect the property
                    depicted as Lot No: .........in Survey Plan No..... dated ..............made by
                    ..................Licensed Surveyor and Leveller, situated at………………. village within the
                    administrative limits of……………… Pradeshiya Sabha/Urban Council/ Municipal Council and furnish
                    a
                    valuation report for the estimate of market value and forced sale value for the purpose of
                    mortgage.
                </p>
                <p>
                    <b>
                        The valuation details are as follows.
                    </b>
                </p>
                <p>
                    Further details are included in the report. Please refer the annexure 01 mentioned below.
                </p>
                <p class="font-size-2 mt-2">
                    <b>
                        Vlr.W.A.T.I.P.Jayathilake <span class="font-size-3">(FRICS)</span>
                    </b>
                    <br>
                    RICS Registered Chartered Valuation Surveyor<br>
                    Panel Valuer of Commercial Bank PLC
                </p>
            </div>
            <div class="row text-center mt-4">
                <div class="col-12 mt-5">
                    <img src="/img/report/footer1.png" alt="IJVR">
                </div>
            </div>
        </div> --}}
        <!-- Second page -->

        <!-- Third page -->
        {{-- <div class="col-md-10 offset-md-1 col-12 mt-5 ">
            <div class="row">
                <div class="col-12">
                    <p>
                        <b>
                            LIMITATIONS
                        </b>
                    </p>
                </div>
                <div class="col-10 offset-1">
                    <p class="font-size-1 mt-4">
                    <ul>
                        <li><b>This valuation is valid only for estimate of market value and forced sale value
                                for the purpose of mortgage and should not be used for any other purpose or any
                                manner other than mentioned here.</b></li>
                        <li>I am not liable for the damages occur on the client of the report in case of
                            another purpose other than the “Intended Purpose” of the report.</li>
                        <li>This valuation has been prepared for the Directors of Commercial Bank PLC and
                            not for any other person and no responsibility is accepted to third parties for
                            the whole or any part of the contents.</li>
                        <li><b>Validity period of the report is 6 months from the date from the date of
                                valuation.</b></li>
                        <li><b>The Valuation is based on the,</b>
                            <ul>
                                <li>Available information at the time of inspection, and I’m not responsible
                                    for the facts which are not covered at my inspection such as:
                                    astrological facts, social and cultural impact on the property.</li>
                                <li>Provided legal document by the client and the valuer is not responsible
                                    for any negligence done by the professionals (Surveyor, Architecture).
                                </li>
                            </ul>
                        </li>
                        <li><b>I'm not responsible for,</b>
                            <ul>
                                <li>Non-visible circumstance at the subject property.</li>
                                <li>Any changes done by the client after the date of valuation.</li>
                            </ul>
                        </li>
                        <li>Neither the whole nor any part of this valuation or any reference there to may
                            be published in any published documents, circulars or statements published in
                            any way without the written approval of the undersigned as to the form and context
                            in which it may appear.</li>
                        <li>The analysis and conclusion only limited by the reported assumption and
                            conditions.</li>
                    </ul>
                    </p>
                </div>
                <div class="col-12">
                    <p>
                        <b>
                            GENERAL ASSUMPTIONS
                        </b>
                    </p>
                </div>
                <div class="col-10 offset-1">
                    <p class="font-size-1 mt-4">
                    <ul>
                        <li>I value the property on the assumption that the owner has an unencumbered freehold
                            interest of the
                            said property.</li>
                        <li>The property has been valued as if wholly owned, no account being taken of any
                            outstanding
                            moneys due in respect of mortgage bonds, loans and other charges.</li>
                        <li>The valuation is done by the valuer with his best of knowledge by analyzing the
                            market
                            evidences.</li>
                    </ul>
                    </p>
                </div>
                <div class="col-12">
                    <p>
                        <b>
                            COMPLIANCE STATEMENT
                        </b>
                    </p>
                </div>
                <div class="col-10 offset-1">
                    <p class="font-size-1 mt-4">
                    <ul>
                        <li>The valuer has no conflicts of interest on the subject property.</li>
                        <li>The valuation is produced in accordance with the ethical guidance, valuation
                            standard numbers 07 and 20 of Sri Lanka Valuation standards, RICS standards
                            and different guidelines given by the Bank.</li>
                        <li>I have followed the guidelines and checklist issued by Commercial Bank of
                            Ceylon PLC, effective from 01.01.2024, and hereby confirm that the valuation
                            report is prepared in accordance with the concerns raised by the bank, covering
                            issues affected to subject property stipulated by the checklist.</li>
                        <li>The valuer has satisfied professional education requirement and he has
                            experience in the location category and of the property being valued.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div> --}}
        <!-- Third page -->
        <!-- Fourth Page -->
        {{-- <div class="col-md-10 offset-md-1 col-12 mt-5">
            <div class="row">

                <p class="font-size-1 mt-2 text-center text-underline text-uppercase fw-bold">
                    Valuation report of property depicted as Lot No:..... in Survey Plan <br>
                    No. ...<br>
                    Dated .....<br>
                    Made by ...............Licensed Surveyor and Leveller
                </p>
            </div>

            <div class="row">
                <div class="col-12">
                    <p>
                        <b>
                            1 PURPOSE OF THE VALUATION
                        </b>
                    </p>

                    <p class="font-size-1 mt-4 mx-4">
                        The purpose of this valuation is to determine both the market value and forced sale
                        value/insurance value/liquidation value of the subject property for mortgage
                        lending/insurance/auction/liquidation/insurance purpose.
                    </p>
                </div>
                <div class="col-12">
                    <p>
                        <b>
                            2 PREMISE OF VALUE
                        </b>
                    </p>
                    <p class="font-size-1 mt-4 mx-4">
                        This valuation report considers the existing use of the property as the premise of
                        value, in accordance with the specific requirements for mortgage purpose, focusing on
                        the property's current functionality and market position rather than its highest and
                        best potential use.
                    </p>
                    <p class="font-size-1 mt-2 mx-4">
                        In accordance with the requirements for non-performing mortgages/auction purpose, this
                        valuation report considers orderly liquidation and forced liquidation scenarios as
                        premises of valuation.
                    </p>
                </div>
                <div class="col-12">
                    <p>
                        <b>
                            3 BASIS OF THE VALUATION
                        </b>
                    </p>
                    <p class="font-size-1 mt-4 mx-4">
                        The basis of this valuation is Market value/Insurance value/Forced sale value.
                    </p>
                </div>
                <div class="col-12">
                    <p>
                        <b>
                            4 CLIENT INFORMATION
                        </b>
                    </p>
                </div>
                <div class="col-10 offset-1">
                    <table class="table">
                        <tr>
                            <td>4.1 Name and address of the Mortgagor</td>
                            <td>Mr. S.S KUMAR, No.97/B, Meethotamulla road, Wellampitiya.</td>
                        </tr>
                        <tr>
                            <td> 4.2 Contact Numbers</td>
                            <td>0775865151 | 0115824953</td>
                        </tr>
                        <tr>
                            <td> 4.3 Type of the property</td>
                            <td>Bare land</td>
                        </tr>
                        <tr>
                            <td> 4.4 Address of the property</td>
                            <td>No.257. Avissawella road,Kaduwela</td>
                        </tr>
                        <tr>
                            <td> 4.5 Presented party at the time of inspection</td>
                            <td>Applicant</td>
                        </tr>
                        <tr>
                            <td> 4.6 Date of inspection</td>
                            <td>.............2023</td>
                        </tr>
                        <tr>
                            <td> 4.7 Date of valuation</td>
                            <td>.............2023</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="font-size-1 mt-4">
                        <b>
                            5 PROPERTY DETAILS
                        </b>
                    </p>
                    <p class="font-size-2">
                        <b>
                            5.1 SITUATION
                        </b>
                    </p>
                </div>
                <div class="col-10 offset-1">
                    <p class="font-size-1">
                        The land called ..............is situated at ........... village within the
                        administrative
                        limits of ............. Pradeshiya Sabha in......Pattu of.... Korale, District of
                        ............, ..............Province.
                    </p>
                </div>

                <div class="col-12">
                    <p class="font-size-2">
                        <b>
                            5.2 DESCRIPTION OF THE PROPERTY
                        </b>
                    </p>
                    <p class="font-size-2">
                        5.2.1 EXTENT
                    </p>
                </div>
                <div class="col-10 offset-1">
                    <table>
                        <tr>
                            <th rowspan="2">Extent</th>
                            <th colspan="4">Verification of extent with deed</th>
                        </tr>
                        <tr>
                            <th>A</th>
                            <th>R</th>
                            <th>P</th>
                            <th>Hectares</th>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>2</td>
                            <td>10</td>
                            <td>0.00510</td>
                            <td rowspan="2">Lot No: .........in Survey Plan No. .... dated ..............made by
                                ..................Licensed Surveyor and Leveller.</td>
                        </tr>

                        <tr>
                            <td colspan="6"></td>
                            <td>Deed of Transfer/Gift/Ownership Certificate</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>2</td>
                            <td>10</td>
                            <td>0.00510</td>
                            <td>Deed of Transfer/Gift/Ownership Certificate No. ………. dated …………. attested by
                                …………………
                                Attorney at law and N.P.</td>
                        </tr>
                    </table>
                    <p class="font-size-1 mt-4">
                        andbull; The extent mentioned in the above survey plan is tally with the above deed. <br>
                        andbull; The extent mentioned in the above survey plan and deed is 00A-0R-00P and
                        00A-0R-00P
                        respectively. However, I have considered the lowest extent.
                    </p>
                </div>

                <div class="col-12">
                    <p class="font-size-2">
                        5.2.2 VALIDITY OF THE SURVEY PLAN
                    </p>
                </div>
                <div class="col-10 offset-1">
                    <table>
                        <tr>
                            <th>Date of Survey Plan</th>
                            <th>Exceeding over 10 years</th>
                            <th>Surveyor’s endorsement or new survey plan</th>
                        </tr>
                        <tr>
                            <td rowspan="2">25th July 2010</td>
                            <td>No</td>
                            <td rowspan="1">Not required</td>
                        </tr>
                        <tr>
                            <td>Yes</td>
                            <td rowspan="1">Required</td>
                        </tr>
                    </table>

                </div>
                <div class="col-12 mt-2">
                    <p class="font-size-2">
                        5.2.3 BOUNDARIES
                    </p>
                </div>
                <div class="col-10 offset-1">
                    <table>
                        <tr>
                            <th style="width: 10%"></th>
                            <th style="width: 30%">On Plan</th>
                            <th style="width: 30%">On Site</th>
                            <th style="width: 30%">Pictures of Boundary </th>
                        </tr>
                        <tr>
                            <td>North by</td>
                            <td>.........................</td>
                            <td>Concrete post/Parapet wall/Survey pegs</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>East by</td>
                            <td>.........................</td>
                            <td>Concrete post/Parapet wall/Survey pegs</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>South by</td>
                            <td>.........................</td>
                            <td>Concrete post/Parapet wall/Survey pegs</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>West by</td>
                            <td>.........................</td>
                            <td>Concrete post/Parapet wall/Survey pegs</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <ul>
                                    <li>
                                        Right of way to the property is available from at its Northern / Eastern
                                        /Southern /Western boundary.
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-12 mt-2">
                    <p class="font-size-2">
                        <b>
                            5.3 ACCESS AND NATURE OF THE ACCESSIBILITY
                        </b>
                    </p>
                </div>
                <div class="col-md-10 offset-md-1">
                    <p class="font-size-1">
                        From Presidential Secretariat Roundabout in Fort, travel along Janadhipathi Mawatha
                        for about 350 meters and reach Light House Clock Tower Roundabout. Then turn right
                        onto Chatham Street and travel about 100 meters to reach the property to be valued. It
                        is located on the right hand side and facing this road at its northern boundary and also
                        located just opposite to Fort Jumma Mosque. <br><br>
                        The access road is 20 ft. wide gravel/concrete/tarred/interlock paved/carpeted and
                        legal right of way available from public/private road.
                    </p>
                </div>
                <div class="col-md-12">
                    <p class="font-size-1">
                        <b>
                            Coordinate of the Location - xxxxxxxxxx , xxxxxxxxxxxx
                            <div class="text-center mt-2">
                                Location Sketch at ………
                            </div>
                        </b>
                    </p>
                    <div class="row">
                        <div class="col-md-10 offset-md-1 location-div p-4">

                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <p class="font-size-2">
                        <b>
                            5.4 DESCRIPTION OF THE LAND
                        </b>
                    </p>
                </div>
            </div>
        </div> --}}
        <!-- Fourth Page -->
    </div>
</body>

</html>