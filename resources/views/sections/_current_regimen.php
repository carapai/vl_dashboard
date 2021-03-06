<div>
    <span class='reg_toggle' ng-model="show_fclties1" ng-init="show_reg=true" ng-click="showReg()">
        <span class='active' id='reg_shw'>&nbsp;&nbsp;REGIMEN GROUPS&nbsp;&nbsp;</span>
        <span id='dur_shw'>&nbsp;&nbsp;DURATION ON ART&nbsp;</span>
    </span>
    <br>
    <br>

    <div class="row" ng-show="show_reg">
        <div class="col-lg-6">                        
            <div id="regimen_groups" class="db-charts">
                <svg></svg>
            </div>                        
        </div>

        <div class="col-lg-6 facilties-sect " >
            <table datatable="ng" class="row-border hover table table-bordered table-condensed table-striped">
                <thead>
                    <tr>
                        <th>Regimen</th>
                        <th>Samples Received</th>
                        <th>Samples Tested</th>
                        <th>Number Suppressed</th>
                        <th>Percentage of Samples (%)</th>
                    </tr>
                </thead>
                <tbody>                                
                    <tr ng-repeat="r in regimen_group_numbers | orderBy:'-samples_received'" >
                        <td class="ng-cloak"><% labels.reg_grps[r._id] %></td>
                        <td class="ng-cloak"><% r.samples_received|number %></td>
                        <td class="ng-cloak"><% r.total_results|number %></td>
                        <td class="ng-cloak"><% r.suppressed|number %></td>
                        <td class="ng-cloak"><% ((r.samples_received/samples_received)*100 )| number:1 %> %</td>
                    </tr>                        
                 </tbody>
            </table>
        </div>
    </div>

    <div class="row" ng-hide="show_reg">
        <div class="col-lg-6">                        
            <div id="regimen_time" class="db-charts">
                <svg></svg>
            </div>                        
        </div>

        <div class="col-lg-6 facilties-sect " >
            <table datatable="ng" class="row-border hover table table-bordered table-condensed table-striped">
                <thead>
                    <tr>
                        <th>Time on Treatment</th>
                        <th>Samples Received</th>
                        <th>Percentage of Samples (%)</th>
                        <th>Samples Tested</th>
                        <th>Number Suppressed</th>                    
                    </tr>
                </thead>
                <tbody>                                
                    <tr ng-repeat="r in regimen_time_numbers | orderBy:'-samples_received'" >
                        <td class="ng-cloak"><% labels.reg_times[r._id] %></td>
                        <td class="ng-cloak"><% r.samples_received|number %></td>
                        <td class="ng-cloak"><% ((r.samples_received/samples_received)*100 )| number:1 %> %</td>
                        <td class="ng-cloak"><% r.total_results|number %></td>
                        <td class="ng-cloak"><% r.suppressed|number %></td>                    
                    </tr>                        
                 </tbody>
            </table>
        </div>
    </div>
</div>