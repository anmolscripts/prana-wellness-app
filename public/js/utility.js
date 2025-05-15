/**
 * Universal input navigator + submit helper
 *
 * @param {HTMLInputElement[]} fields  - Array of input elements
 * @param {HTMLElement|null} submitBtn - Button to click on final Enter (or null)
 * @param {Object} options
 * @param {'numeric'|'text'} options.mode        - 'numeric' = single-digit only; 'text' = free text
 * @param {boolean}           options.autoAdvance - true to move focus automatically
 */
function setupFieldNavigator(fields, submitBtn, options = {}) {
  const { mode = 'text', autoAdvance = true } = options;
  if (!fields || fields.length === 0) return;

  fields.forEach((field, i) => {
    // sanitize on input
    field.addEventListener('input', () => {
      if (mode === 'numeric') {
        field.value = field.value.replace(/[^0-9]/g, '').slice(0, 1);
      }
      // else, leave full text
    });

    field.addEventListener('keydown', e => {
      const isFirst = i === 0;
      const isLast  = i === fields.length - 1;

      // navigation keys
      switch (e.key) {
        case 'ArrowLeft':
          if (!isFirst && autoAdvance) fields[i - 1].focus();
          break;
        case 'ArrowRight':
          if (!isLast && autoAdvance) fields[i + 1].focus();
          break;
        case 'Backspace':
          // if empty and not first, go back
          if (field.value === '' && !isFirst && autoAdvance) {
            fields[i - 1].focus();
          }
          break;
        case 'Enter':
          e.preventDefault();
          if (!isLast && autoAdvance) {
            fields[i + 1].focus();
          } else if (isLast && submitBtn) {
            submitBtn.click();
          }
          break;
        default:
          break;
      }
    });

    field.addEventListener('keyup', e => {
      // numeric auto‑advance
      if (mode === 'numeric' && autoAdvance && /^[0-9]$/.test(e.key)) {
        const isLast = i === fields.length - 1;
        if (!isLast) {
          fields[i + 1].focus();
        } else if (submitBtn) {
          submitBtn.click();
        }
      }
    });
  });
}