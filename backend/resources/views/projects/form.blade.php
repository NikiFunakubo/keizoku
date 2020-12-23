@csrf
<ul>
    <li>
        <div class="ui input">
            <input type="text" name="project_name" placeholder="プロジェクト名" required value="{{ old('project_name') }}">
        </div>
    </li>
    <li>
        <div class="ui input">
            <input type="text" name="project_description" placeholder="概要" value="{{ old('project_description') }}">
        </div>
    </li>
    <li>
        <div class="ui input">
            <input type="text" name="target_days" placeholder="目標日数"  required value="{{ old('target_days') }}">
        </div>
    </li>
    <li>
        <div class="ui input">
            <input type="text" name="achievement_days" placeholder="実施期間" value="{{ old('achievement_days') }}">
        </div>
    </li>
    <li>
        <div class="ui right labeled left icon input">
            <i class="tags icon"></i>
            <input type="text" name="tags" placeholder="Enter tags">
            <a class="ui tag label">
                Add Tag
            </a>
        </div>
    </li>
