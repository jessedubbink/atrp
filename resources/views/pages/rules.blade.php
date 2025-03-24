@extends('layouts.master')

@section('title', "Home")
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
                <h2>Discord/RedM/Community</h4>
                <ul class="rules">
                    <li>1. Racism, sexism or other offensive chat.</li>
                    <li>2. Obscene/Offensive Usernames (see name policy)</li>
                    <li>3. Spaming chat, or flooding the chat continuously. </li>
                    <li>4. Violence or threats.</li>
                    <li>5. Making confidential conversations or chats public.</li>
                    <li>6. Posting other people's personal details without their permission.</li>
                    <li>7. Personal attacks.</li>
                    <li>8. NSFW content (gore or porn). If your asking yourself it the material your going to post is NSFW then just don't post it unless a moderator approves beforehand.</li>
                    <li>9. Lying to a Staff Member.</li>
                    <li>10. English is this communities primary language if you cannot communicate it's not worth you being here.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row redm-rules">
    <div class="col-lg-8 offset-lg-2 my-5">
        <div class="row">
            <div class="col-lg-9">
                <h2>RedM</h4>
                <ul class="rules">
                    <li>1. Respect the community.</li>
                    <li>2. The staffs decision is final.</li>
                    <li>3. No Power Gaming or metagaming.</li>
                    <li>4. No committing crimes in unrealistic areas.</li>
                    <li>5. No unacceptable/obscene/offensive Character/Names.</li>
                    <li>6. No suicide/combat logging when in roleplay scene.</li>
                    <li>7. No Exploiting scripts or GTA V mechanics.</li>
                    <li>8. Abuse of Reports/Helps will not be tolerated.</li>
                    <li>9. RDM/VDM is not tolerated.</li>
                    <li>10. No RPing with /ooc chat knowledge.</li>
                    <li>11. No circumbenting a Ban.</li>
                    <li>12. No CharacterChat/selling/looking(iso) chat in /ooc.</li>
                    <li>13. No FailRP/Unrealistic RP.</li>
                    <li>14. No Inappropriate/unrealistic Clothing Combinations (this includes missing limbs/checkers).</li>
                    <li>15. AFK/Paycheck Farming will be a temp ban! (20 min afk timer for a reason).</li>
                    <li>16. No Role Playing a Character under 16years old.</li>
                    <li>17. No New Life Revenge Killing (read RP death screen).</li>
                    <li>18. Stealing Service vehicles is not permitted.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row main-rules">
    <div class="col-lg-8 offset-lg-2 my-5">
        <div class="row">
            <div class="col-lg-9">
                <h2>ATRP Discord Chat</h4>
                <ul class="rules">
                    <li>1. Do not use the @everyone / @here ping unless permission by Admin/Moderator (this includes unneeded @moderator/admin/owner usernames).</li>
                    <li>2. Do not type in ALL CAPS.</li>
                    <li>3. No excessively cursing.</li>
                    <li>4. No racist or degrading content such as pictures etc.. (racial terms/slurs are not allowed).</li>
                    <li>5. Politics and anything POLITICAL will be deleted on site.</li>
                    <li>6. No advertising other sites/discord servers THIS INCLUDES targeting AT discord members DirectMessages (Permission must be requested from Staff).</li>
                    <li>7. No referral links.</li>
                    <li>8. No begging or repeatedly asking for help in the chat, please keep question in the #questions channel. Repeatedly asking basic questions will lead to administrative action.</li>
                    <li>9. No offensive names.</li>
                    <li>10. No bashing or heated arguments to other people in the chat take it to DirectMessages.</li>
                    <li>11. Unofficial bot invites are NOT ALLOWED, any bots that are found will be INSTANTLY BANNED without warning.</li>
                    <li>12. No text walls or a large paragraph of text. Use Pastebin/Pastie to post a large block of text.</li>
                    <li>13. DO NOT perform and/or promote the use of hacks, bugs, glitches, and other exploits.</li>
                    <li>14. DO NOT cause chaos in the community, multiple complaints from several members will lead to administrative action.</li>
                    <li>15. DO NOT argue with staff. Decisions are final.</li>
                    <li>16. DO NOT DM staff unless directed to! Find the correct channel for your inquiry.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection