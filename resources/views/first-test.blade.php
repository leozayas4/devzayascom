@extends('layout')     

@section('content')
        <div class="header">
                
                <div class="nav">
                    <div class="logo"><img src="/img/zayas-dev-01.png" height="30px"></div>
                    
                    <a class="btn-home" href="/"><div class="ts-1-5 txt-c">Home</div></a>
                    <a class="btn-search" href="/properties"><div class="btn-search ts-1-5 txt-c">Properties</div></a>
                    <a class="btn-checks" href="/"><div class="btn-checks ts-1-5 txt-c">Checks</div></a>
                    <a class="btn-waterdays" href="/"><div class="btn-waterdays ts-1-5 txt-c">Water Days</div></a>
                    <a class="btn-misc" href="/"><div class="btn-misc ts-1-5 txt-c">Misc</div></a>
                    <a class="btn-admin" href="/"><div class="btn-admin ts-1-5 txt-c">Admin</div></a>
                
                 <div class="property-search">
                    <select name="properties">
                        <option value="">Search for property</option>
                        <option value="25">Some Job</option>
                        <option value="174">Some Longer Job</option>
                        <option value="185">Some Even Longer Job</option>
                    </select>
                </div>

            </div>
            
            <div class="menu"></div>
            <div class="prop-info"></div>
            <div class="main"></div>
            <div class="responses"></div>        
            <div class="users"></div>        
            <div class="footer"></div>        

                        
        
        </div>
@endsection  