@extends('layouts.master')

@section('title', "Policies")
@section('styles')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rules.css') }}" rel="stylesheet">
@endsection

@section('scripts')
@endsection

@php($footer = true)

@section('content')

<div class="row main-rules">
    <div class="col-lg-8 offset-lg-2 my-5">
        <div class="row">
            <div class="col-lg-9">
                <h2>American Tycoon Civilian Policy (ATCP).</h4>
                <p>All Certified Civilians (formerly TRUSTED HELP) will meet the following criteria -</p>
                <ul class="rules">
                    <li>1. Community Members that have been active in game and have a general knowledge of the game mechanics.</li>
                    <li>2. Fully understand all of the #rules and #policies of ATRP.</li>
                    <li>3. Is held to a higher standard in RP scenes, Certified Civilians have opportunities such as but not limited to:
                        <ul>
                            <li>Boss business ownership opportunity,</li>
                            <li>Exclusive event access,</li>
                            <li>Discord Rank (with added channels),</li>
                            <li>Custom License Plates Allowed  Beta Exclusive,</li>
                            <li>Extra purge immunity,</li>
                            <li>Full launch money grant.</li>
                        </ul>
                    </li>
                    <li>American Tycoon reserves the right to remove and kick people who are not following ATCP, any complaints will result in appropriate punishment.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row redm-rules">
    <div class="col-lg-8 offset-lg-2 my-5">
        <div class="row">
            <div class="col-lg-9">
                <h2>American Tycoon Admin Policy (ATAP).</h4>
                <p>Admin/on-duty Admin will be required to meet the following expectations when on-duty:</p>
                <ul class="rules">
                    <li>1. Will be in Admin uniform while on-duty (follow admin procedure).</li>
                    <li>2. Will have notifications on for server logs.</li>
                    <li>3. Will be active in ATRP voice chat.</li>
                    <li>4. Will be responsible for current RP in the server.</li>
                    <li>5. Will be actively Banning/TempBanning FailRPer/Modders.</li>
                    <li>6. Will be addressing reports and issues that come up on the server.</li>
                    <li>American Tycoon reserves the right to remove and kick admins who are not following ATAP, any admin complaints can be initiated in voice chat with a higher ranking admin, owner, or developer.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row main-rules">
    <div class="col-lg-8 offset-lg-2 my-5">
        <div class="row">
            <div class="col-lg-9">
                <h2>American Tycoon Moderator Policy (ATMP).</h4>
                <p>Moderators/off-duty-admins will be required to meet the following expectations:</p>
                <ul class="rules">
                    <li>1. Will help moderate the server while being an active civilian.</li>
                    <li>2. Will help kick players for RDM/VDM/Rule violations when needed.</li>
                    <li>3. Will not use elevated functions to elevate his/her civilian experience beyond Certified Civilians. (teleporting to friends, repairing your car because you were going to fast, etc.).</li>
                    <li>4. Will be expected to be help admins when needed.</li>
                    <li>5. Will be expected to have a clear understanding off all rules and procedures and be able to relay such rules and procedures effectively when needed.</li>
                    <li>American Tycoon reserves the right to remove and kick moderators who are not following ATMP, any complaints will result in appropriate punishment.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row redm-rules">
    <div class="col-lg-8 offset-lg-2 my-5">
        <div class="row">
            <div class="col-lg-9">
                <h2>American Tycoon LEO Policy (ATLP).</h4>
                <p>On-Duty LEO will be required to meet the following expectations:</p>
                <ul class="rules">
                    <li>1. Will maintain RP in game voice chat.</li>
                    <li>2. Will create a real life scene when LEO arrives.</li>
                    <li>3. Will perform traffic stops according to real life for speeding/running lights/hit and runs/ etc.</li>
                    <li>4. Will respond to police calls/shots fired/robberies.</li>
                    <li>5. Will follow chain of command.</li>
                    <li>6. Will report FailRP/RDM/VDM to Admin on-duty while maintaining RP if possible.</li>
                    <li>American Tycoon reserves the right to remove and kick LEOS who are not following ATLP, any complaints will result in appropriate punishment.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row main-rules">
    <div class="col-lg-8 offset-lg-2 my-5">
        <div class="row">
            <div class="col-lg-9">
                <h2>American Tycoon Banning Policy (ATBP).</h4>
                <p>We really don't want to ban anyone. However, we won't hesitate to ban obvious troll accounts, or members who repeatedly step out of line. If you have been banned, we may welcome you back eventually, if you post a ban appeal. You'll need to show us that you are ready to come back to our community.  </p>
                <ul class="rules">
                    <li>Examples of bannable offenses:
                        <ul>
                            <li>RDM</li>
                            <li>VDM</li>
                            <li>FailRP</li>
                            <li>Mod Menu</li>
                            <li>Exploiting server mechanics</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row redm-rules">
    <div class="col-lg-8 offset-lg-2 my-5">
        <div class="row">
            <div class="col-lg-9">
                <h2>American Tycoon Name policy (ATNP).</h4>
                <p>Nicknames /steam names may only contain symbols in a single human script, no excessive Unicode combiners (as those aren't human scripts!), no symbol abuse or 'stylistic ranges' either (Fraktur, mathematical cursive, ...), and finally no obscene/offensive words/phrases/names.</p>
                <ul class="rules">
                    <li>Okay Usernames/nicknames:
                        <ul>
                            <li>user!</li>
                            <li>ленин</li>
                            <li>ジャガイモ</li>
                            <li>1-2-3 amazing (due to technical limitations, this is represented in bold)</li>
                        </ul>
                    </li>
                    <li>NOT OKAY Username/nickname examples:
                        <ul>
                            <li>𝕱𝕺𝕿𝖀𝕾3555448 (compatibility ranges that aren't a script)</li>
                            <li>ᑭᗩᑎᗪᗩ (homoglyphs to look like Latin)</li>
                            <li>ленин wins! (multiple scripts)</li>
                            <li>ʕ ᓀ ᴥ ᓂ ʔ lul (script abuse to cause a 'donger')</li>
                        </ul>
                    </li>
                    <li>American Tycoon reserves the right to change nicknames and kick people who are not following ATNP, any complaints will result in appropriate punishment. </li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection