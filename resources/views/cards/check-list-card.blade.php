<div class="mdl-card__supporting-text mdl-color-text--blue-grey-50 padding-bottom-0">
    <h3 class="mdl-card__title-text">
        Incomplete Tasks
    </h3>
    <ul>

        @foreach ($incompleteTasks as $task)

            <li>

                {!! Form::model($task, array('action' => array('TasksController@update', $task->id), 'method' => 'PUT', 'class'=>'form-inline', 'role' => 'form')) !!}

                    <label for="completed-{{ $task->id }}" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        {!! Form::hidden('name', $task->name, array('id' => 'task-name-'.$task->name)) !!}
                        {!! Form::hidden('description', $task->description, array('id' => 'task-description-'.$task->id)) !!}
                        {!! Form::checkbox('completed', 1, $task->completed, ['id' => 'completed-'.$task->id, 'class' => 'mdl-checkbox__input','onClick' => 'this.form.submit()']) !!}
                        <span class="mdl-checkbox__label">
                            {{ $task->name }}
                        </span>

                    </label>

                {!! Form::close() !!}

            </li>

        @endforeach

    </ul>
</div>
<div class="mdl-card__actions mdl-card--border">
    <a href="/tasks" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50">
        See All Tasks
    </a>
</div>
