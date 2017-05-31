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
                <h4>{{ $section->form_element_label }}</h4>
            </div>
            <div class="panel__full">
                <fieldset class="{{ $errors->has($section->form_element_name) ? 'error' : '' }}">
                    {!! Form::textarea( 'sections[' . $section->id . '][' . $section->form_element_name . ']' ) !!}
                    <div class="form__error">{{ $errors->first($section->form_element_name) }}</div>
                </fieldset>
            </div>
        </div>
    </div>
</div>