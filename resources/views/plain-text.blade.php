<?php
/**
 * @author Jonathon Wallen
 * @date 30/5/17
 * @time 5:46 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */
?>
<div class="panel  panel__full">
    <div class="panel__inner">
        <div class="panel__row">
            <div class="panel__full">
                <h4>{{ $section->label }}</h4>
            </div>
            <div class="panel__full">
                <fieldset class="{{ $errors->has('sections.' . $section->id . '.data.content') ? 'error' : '' }}">
                    {!! Form::textarea( 'sections[' . $section->id . '][data][content]', $section->data['content']) !!}
                    <div class="form__error">{{ $errors->first('sections.' . $section->id . '.data.content') }}</div>
                </fieldset>
            </div>
        </div>
    </div>
</div>

