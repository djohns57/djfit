# AI Assistant Features Test Guide

## Test Environment
- **Base URL**: https://djfit.ddev.site
- **One-time admin login**: https://djfit.ddev.site/user/reset/1/1771120575/ysfy-cCFocFqgq5FAug88PidfZW46pRaUQxWqK-EAlY/login
- **Date**: February 13, 2026

## System Status

### Enabled AI Modules ✅
- `ai` - AI Core
- `ai_assistant_api` - AI Assistant API
- `ai_content_suggestions` - AI Content Suggestions
- `ai_ckeditor` - AI CKEditor integration
- `field_widget_actions` - Field Widget Actions
- `ai_image_alt_text` - AI Image Alt Text (**NEWLY ENABLED**)
- `ai_provider_amazeeio` - amazee.ai AI Provider

### AI Provider Configuration ✅
- **Provider**: amazee.ai (amazeeio)
- **Models**: chat, embeddings
- **Status**: Configured and ready

---

## Test 1: AI Content Suggestion / Dummy Content Helper

### Expected Behavior
Text fields should display AI-powered content suggestion actions.

### Test Steps

1. **Login**
   - Open: https://djfit.ddev.site/user/reset/1/1771120575/ysfy-cCFocFqgq5FAug88PidfZW46pRaUQxWqK-EAlY/login
   - Verify you are logged in as admin

2. **Navigate to Content Creation**
   - Go to: `/node/add/page`
   - Or click: Content → Add content → Basic page

3. **Locate AI Content Suggestion UI**
   - Look for the **"Content" field** (`field_content`) - main body text area
   - Check for AI helper UI elements:
     - **Button with AI icon** near the field
     - **Dropdown menu** with "AI Content Suggestions" option
     - **Action link** labeled "Content Suggestion with prompt"
   - Location: Usually appears near field label or below the textarea

4. **Test AI Content Generation**
   - Enter some initial text in the field (e.g., "Write about fitness training")
   - Click the AI action button/link
   - Wait for AI response
   - Verify: AI returns suggested content based on your input

5. **Try Other Text Fields**
   - Test on **"Description" field** (`field_description`)
   - Test on **"Title" field** if AI action appears

### Expected Result
- ✅ PASS: AI action button/dropdown appears on text fields
- ✅ PASS: Clicking AI action generates content suggestions
- ✅ PASS: Generated content is relevant to the input

### Potential Issues
- ⚠️ If no AI button appears: Field widget actions may not be configured in form display
- ⚠️ If AI fails to generate: Check AI provider API key configuration
- ⚠️ If permission error: Verify user has "Use AI content suggestions" permission

---

## Test 2: AI Alt-Text Helper

### Expected Behavior
Image fields should display an AI-powered "Generate alt text" action.

### Test Steps

1. **Navigate to Content Creation**
   - Go to: `/node/add/page`
   - Or use existing page: `/node/add/page`

2. **Add/Edit Image**
   - Locate **"Featured Image" field** (`field_featured_image`)
   - Click **"Add media"** button
   - Upload a new image OR select existing image from library

3. **Locate AI Alt-Text UI**
   - In the media form/dialog, find the **"Alternative text" field**
   - Look for AI helper UI elements:
     - **"Generate alt text" button** with AI icon
     - **Action link** near the alt text field
     - **AI icon/sparkle** indicator
   - Location: Usually appears next to or below the alt text input field

4. **Test AI Alt-Text Generation**
   - Click the **"Generate alt text"** button
   - Wait for AI to analyze the image (may take 2-5 seconds)
   - Verify: AI populates the alt text field with descriptive text

5. **Verify Alt-Text Quality**
   - Check that alt text is:
     - Short and descriptive (under 100 characters)
     - Accurately describes the image
     - Does NOT start with "image of" or "picture of"
     - Uses proper punctuation
     - In the correct language (English)

### Expected Result
- ✅ PASS: "Generate alt text" button appears on image alt text field
- ✅ PASS: Clicking button analyzes image and generates alt text
- ✅ PASS: Generated alt text is descriptive and follows accessibility best practices

### Potential Issues
- ⚠️ If no button appears: Check that `ai_image_alt_text` module is enabled
- ⚠️ If generation fails: Verify AI provider supports image vision (amazee.ai should support this)
- ⚠️ If permission error: Verify user has "Use AI image alt text" permission

---

## Test 3: Additional AI Features (Optional)

### CKEditor AI Integration
If using CKEditor (rich text editor):
1. Look for AI toolbar buttons in the editor
2. Try AI-powered text transformation features
3. Test content rewriting/improvement suggestions

### AI Chatbot
1. Look for AI chatbot block on the site
2. Test conversational AI assistant
3. Verify responses are contextual

---

## Troubleshooting

### No AI Actions Appear on Form Fields

**Possible Causes:**
1. Field widget actions not configured in form display
2. User lacks permissions
3. AI provider not properly configured

**Fix:**
```bash
# Check permissions
ddev drush user:role:add administrator admin

# Verify AI provider configuration
ddev drush config:get ai.settings

# Clear cache
ddev drush cr
```

### AI Generation Fails

**Possible Causes:**
1. AI provider API key missing or invalid
2. Network connectivity issues
3. AI model not configured

**Fix:**
```bash
# Check AI provider settings
ddev drush config:get ai_provider_amazeeio.settings

# Test AI connection
ddev drush php:eval "\$provider = \Drupal::service('ai.provider')->createInstance('amazeeio'); print_r(\$provider->getModels('chat'));"
```

### Alt-Text Button Not Visible

**Fix:**
```bash
# Ensure module is enabled
ddev drush pm:enable ai_image_alt_text -y

# Check configuration
ddev drush config:get ai_image_alt_text.settings

# Verify hide_button is false
ddev drush config:set ai_image_alt_text.settings hide_button false -y

# Clear cache
ddev drush cr
```

---

## Configuration Commands

### Enable AI Image Alt Text (Already Done)
```bash
ddev drush pm:enable ai_image_alt_text -y
ddev drush cr
```

### Configure Field Widget Actions for Content Field
```bash
# This may need to be done via UI at:
# /admin/structure/types/manage/page/form-display
# Look for "Field widget actions" settings in each field's configuration
```

### Grant AI Permissions
```bash
ddev drush user:role:add administrator admin
ddev drush cr
```

---

## Expected Test Results Summary

| Feature | Status | Notes |
|---------|--------|-------|
| **AI Content Suggestions** | ⚠️ LIKELY PASS | Module enabled, provider configured, needs UI verification |
| **AI Alt-Text Helper** | ✅ PASS | Module NOW enabled, configured, ready to test |
| **Field Widget Actions** | ✅ ENABLED | Required module is active |
| **AI Provider** | ✅ CONFIGURED | amazee.ai provider ready |

---

## Manual Testing Checklist

- [ ] Login successful with one-time URL
- [ ] Navigate to `/node/add/page`
- [ ] AI content suggestion button visible on text fields
- [ ] AI content suggestion generates relevant content
- [ ] Image upload/selection works
- [ ] "Generate alt text" button visible on alt text field
- [ ] AI alt-text generation works and produces quality output
- [ ] No permission errors
- [ ] No JavaScript errors in browser console

---

## Report Template

After testing, document your results:

### Test Results

**Date**: [Date]  
**Tester**: [Your Name]  
**Environment**: https://djfit.ddev.site

#### AI Content Suggestion Test
- **Status**: PASS / FAIL
- **UI Element Found**: YES / NO
- **Location**: [Describe where you found the AI action]
- **Action Label**: [Exact text of button/link]
- **Test Output**: [What happened when you clicked it]
- **Issues**: [Any problems encountered]

#### AI Alt-Text Helper Test
- **Status**: PASS / FAIL
- **UI Element Found**: YES / NO
- **Location**: [Describe where you found the AI action]
- **Action Label**: [Exact text of button/link]
- **Test Output**: [Generated alt text example]
- **Issues**: [Any problems encountered]

#### Blockers
- [List any blockers that prevented testing]

#### Recommended Fixes
- [List any fixes needed based on test results]

---

## Additional Resources

- AI Module Documentation: https://project.pages.drupalcode.org/ai/
- AI Content Suggestions: https://project.pages.drupalcode.org/ai/latest/modules/ai_content_suggestions/
- Field Widget Actions: https://www.drupal.org/project/field_widget_actions
- amazee.ai Provider: https://www.drupal.org/project/ai_provider_amazeeio
