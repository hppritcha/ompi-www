Index: include/private/misc.h
===================================================================
--- include/private/misc.h	(revision 4239)
+++ include/private/misc.h	(working copy)
@@ -46,8 +46,15 @@
  * ffsl helpers.
  */
 
-#ifdef __GNUC__
+#if defined(HWLOC_HAVE_BROKEN_FFS)
 
+/* System has a broken ffs().
+ * We must check the before __GNUC__ or HWLOC_HAVE_FFSL
+ */
+#    define HWLOC_NO_FFS
+
+#elif defined(__GNUC__)
+
 #  if (__GNUC__ >= 4) || ((__GNUC__ == 3) && (__GNUC_MINOR__ >= 4))
      /* Starting from 3.4, gcc has a long variant.  */
 #    define hwloc_ffsl(x) __builtin_ffsl(x)
@@ -75,6 +82,13 @@
 
 #else /* no ffs implementation */
 
+#    define HWLOC_NO_FFS
+
+#endif
+
+#ifdef HWLOC_NO_FFS
+
+/* no ffs or it is known to be broken */
 static __hwloc_inline int __hwloc_attribute_const
 hwloc_ffsl(unsigned long x)
 {
@@ -114,10 +128,8 @@
 	return i;
 }
 
-#endif
+#elif defined(HWLOC_NEED_FFSL)
 
-#ifdef HWLOC_NEED_FFSL
-
 /* We only have an int ffs(int) implementation, build a long one.  */
 
 /* First make it 32 bits if it was only 16.  */
Index: config/hwloc.m4
===================================================================
--- config/hwloc.m4	(revision 4239)
+++ config/hwloc.m4	(working copy)
@@ -446,6 +446,15 @@
         AC_DEFINE([HWLOC_HAVE_DECL_FFS], [1], [Define to 1 if function `ffs' is declared by system headers])
       ])
       AC_DEFINE([HWLOC_HAVE_FFS], [1], [Define to 1 if you have the `ffs' function.])
+      if ( $CC --version | grep gccfss ) >/dev/null 2>&1 ; then
+        dnl May be broken due to
+        dnl    https://forums.oracle.com/forums/thread.jspa?threadID=1997328
+        dnl TODO: a more selective test, since bug may be version dependent.
+        dnl We can't use AC_TRY_LINK because the failure does not appear until
+        dnl run/load time and there is currently no precedent for AC_TRY_RUN
+        dnl use in hwloc.  --PHH
+        AC_DEFINE([HWLOC_HAVE_BROKEN_FFS], [1], [Define to 1 if your `ffs' function is known to be broken.])
+      fi
     ])
     AC_CHECK_FUNCS([ffsl], [
       _HWLOC_CHECK_DECL([ffsl],[
